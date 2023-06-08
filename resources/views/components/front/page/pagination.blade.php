<div class="col-12 text-center">
    <nav class="td-page-navigation">
        @if ($paginator->hasPages())
            <ul class="pagination">
                @if ($paginator->onFirstPage())
                    <li class="pagination-arrow disabled"><a href="#" tabindex="-1"><i
                                class="fa fa-angle-double-left"></i></a></li>
                @else
                    <li class="pagination-arrow"><a href="{{ $paginator->previousPageUrl() }}"><i
                                class="fa fa-angle-double-left"></i></a></li>
                @endif

                @php
                    $startPage = $paginator->currentPage() - 2;
                    $endPage = $paginator->currentPage() + 2;
                    
                    if ($startPage < 1) {
                        $startPage = 1;
                        $endPage = min($startPage + 4, $paginator->lastPage());
                    }
                    
                    if ($endPage > $paginator->lastPage()) {
                        $endPage = $paginator->lastPage();
                        $startPage = max($endPage - 4, 1);
                    }
                @endphp

                @for ($page = $startPage; $page <= $endPage; $page++)
                    @if ($page == $paginator->currentPage())
                        <li><a class="active" href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $paginator->url($page) }}">{{ $page }}</a></li>
                    @endif
                @endfor

                @if ($paginator->hasMorePages())
                    <li class="pagination-arrow"><a href="{{ $paginator->nextPageUrl() }}"><i
                                class="fa fa-angle-double-right"></i></a></li>
                @else
                    <li class="pagination-arrow disabled"><a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </li>
                @endif
            </ul>
        @endif
    </nav>
</div>
