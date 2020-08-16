@extends('admin.layouts.dashboard')

@section('titulo_page')
Panel de Control
@endsection

@section('titulo')
Panel de Administración
@endsection

@section('content')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-top-0">NAME</th>
                <th class="border-top-0">STATUS</th>
                <th class="border-top-0">DATE</th>
                <th class="border-top-0">PRICE</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td class="txt-oflo">Elite admin</td>
                <td><span class="label label-success label-rounded">SALE</span> </td>
                <td class="txt-oflo">April 18, 2017</td>
                <td><span class="font-medium">$24</span></td>
            </tr>
            <tr>

                <td class="txt-oflo">Real Homes WP Theme</td>
                <td><span class="label label-info label-rounded">EXTENDED</span></td>
                <td class="txt-oflo">April 19, 2017</td>
                <td><span class="font-medium">$1250</span></td>
            </tr>
            <tr>

                <td class="txt-oflo">Ample Admin</td>
                <td><span class="label label-purple label-rounded">Tax</span></td>
                <td class="txt-oflo">April 19, 2017</td>
                <td><span class="font-medium">$1250</span></td>
            </tr>
            <tr>

                <td class="txt-oflo">Medical Pro WP Theme</td>
                <td><span class="label label-success label-rounded">Sale</span></td>
                <td class="txt-oflo">April 20, 2017</td>
                <td><span class="font-medium">-$24</span></td>
            </tr>
            <tr>

                <td class="txt-oflo">Hosting press html</td>
                <td><span class="label label-success label-rounded">SALE</span></td>
                <td class="txt-oflo">April 21, 2017</td>
                <td><span class="font-medium">$24</span></td>
            </tr>
            <tr>

                <td class="txt-oflo">Digital Agency PSD</td>
                <td><span class="label label-danger label-rounded">Tax</span> </td>
                <td class="txt-oflo">April 23, 2017</td>
                <td><span class="font-medium">-$14</span></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('titulo2')
Comments Recents
@endsection


@section('content2')
<div class="comment-widgets" style="height:430px;">
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row m-t-0">
        <div class="p-2">
            <img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
        </div>
        <div class="comment-text w-100">
            <h6 class="font-medium">James Anderson</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer">
                <span class="text-muted float-right">April 14, 2016</span>
                <span class="label label-rounded label-primary">Pending</span>
                <span class="action-icons">
                    <a href="javascript:void(0)">
                        <i class="ti-pencil-alt"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-check"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-heart"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row">
        <div class="p-2">
            <img src="../../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle">
        </div>
        <div class="comment-text active w-100">
            <h6 class="font-medium">Michael Jorden</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer ">
                <span class="text-muted float-right">April 14, 2016</span>
                <span class="label label-success label-rounded">Approved</span>
                <span class="action-icons active">
                    <a href="javascript:void(0)">
                        <i class="ti-pencil-alt"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="icon-close"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-heart text-danger"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row">
        <div class="p-2">
            <img src="../../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle">
        </div>
        <div class="comment-text w-100">
            <h6 class="font-medium">Johnathan Doeting</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer">
                <span class="text-muted float-right">April 14, 2016</span>
                <span class="label label-rounded label-danger">Rejected</span>
                <span class="action-icons">
                    <a href="javascript:void(0)">
                        <i class="ti-pencil-alt"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-check"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-heart"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
    <!-- Comment Row -->
    <div class="d-flex flex-row comment-row m-t-0">
        <div class="p-2">
            <img src="../../assets/images/users/2.jpg" alt="user" width="50" class="rounded-circle">
        </div>
        <div class="comment-text w-100">
            <h6 class="font-medium">Steve Jobs</h6>
            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
            <div class="comment-footer">
                <span class="text-muted float-right">April 14, 2016</span>
                <span class="label label-rounded label-primary">Pending</span>
                <span class="action-icons">
                    <a href="javascript:void(0)">
                        <i class="ti-pencil-alt"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-check"></i>
                    </a>
                    <a href="javascript:void(0)">
                        <i class="ti-heart"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
