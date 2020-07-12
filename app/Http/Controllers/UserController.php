<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index',['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'     => 'required|max:50',
            'lastname' => 'required|max:50',
            'email'    => 'required|email|max:255|unique:users',
            'rol'      => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $users = new User();
        $users->name     = request('name');
        $users->lastname = request('lastname');
        $users->email    = request('email');
        $users->password = bcrypt(request('password'));
        $users->save();

        $users->asignarRol($request->get('rol'));

        return redirect('users')->with('Usuario Agregado');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit',['users'=>$users, 'roles' => $roles]);
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),
        ['name'     => ['required','max:50']],
        ['lastname' => ['required','max:50']],
        ['email'    => ['required', 'email', 'max:255', 'unique:users,email,'.$id]],
        ['rol'      => ['required']],
        ['avatar'   => ['required','image']],
        ['password' => ['confirmed']
        ]);

        $users = User::findOrFail($id);
        $users->name     = $request->get('name');
        $users->lastname = $request->get('lastname');
        $users->email    = $request->get('email');

        if($request->hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path('avatar/'), $name);
        }

        $pass = $request->get('password');
        if($pass != null )
        {
            $users->password= bcrypt($request->get('password'));
        } else
        {
            unset($users->password);
        }

        $role = $users->roles;
        if (count($role) > 0)
        {
            $role_id = $role[0]->id;
            User::find($id)->roles()->updateExistingPivot($role_id,['role_id' => $request->get('rol')]);
        }
        else
        {
            $users->asignarRol($request->get('rol'));
        }

        $users->update();

        return redirect('users');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);

       /* $oldImage = public_path() . '/avatar/'. $users->avatar;

        if(file_exists($oldImage)){
            //delete the image
            unlink($oldImage);
        }*/

        $users->delete();
        return redirect('users')->with('Eliminado');
    }
}
