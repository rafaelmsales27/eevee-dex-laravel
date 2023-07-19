<!-- Pagination bar -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        {{-- Previous Page --}}
        @if ($pokes->currentPage() > 1)
            <li class="page-item"><a class="page-link" href="{{ $pokes->previousPageUrl() }}">&laquo;</a></li>
        @endif

        {{-- Pagination Links --}}
        @php
            $maxPages = 5; // Maximum number of page buttons to display
            $startPage = max(1, $pokes->currentPage() - floor($maxPages / 2));
            $endPage = min($startPage + $maxPages - 1, $pokes->lastPage());
        @endphp

        {{-- Display Ellipsis if there are preceding pages --}}
        @if ($startPage > 1)
            <li class="page-item"><a class="page-link">...</a></li>
        @endif

        {{-- Page Buttons --}}
        @for ($i = $startPage; $i <= $endPage; $i++)
            @if ($i == $pokes->currentPage())
                <li class="page-item active"><a class="page-link">{{ $i }}</a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $pokes->url($i) }}">{{ $i }}</a></li>
            @endif
        @endfor

        {{-- Display Ellipsis if there are subsequent pages --}}
        @if ($endPage < $pokes->lastPage())
            <li class="page-item"><a class="page-link">...</a></li>
        @endif

        {{-- Next Page --}}
        @if ($pokes->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $pokes->nextPageUrl() }}">&raquo;</a></li>
        @endif
    </ul>
</nav>
