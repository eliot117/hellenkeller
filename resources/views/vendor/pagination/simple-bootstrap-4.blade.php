@if ($paginator->hasPages())
    <nav aria-label="Paginate">
        <div class="clearfix">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="btn btn-primary float-left">← Noticias Recientes</span>
            @else
                <a class="btn btn-primary float-left" href="{{ $paginator->previousPageUrl() }}" rel="prev">← Noticias Reciente</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="btn btn-primary float-right" href="{{ $paginator->nextPageUrl() }}" rel="next">Noticias Antiguas →</a>
            @else
                <span class="btn btn-primary float-right">>Noticias Antiguas →</span>
            @endif
        </div>
    </nav>
@endif
