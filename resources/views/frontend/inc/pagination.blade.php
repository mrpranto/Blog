<ul class="pagination justify-content-center mb-4">
    <li class="page-item @if($postes->currentPage() == 1) disabled @endif">
        <a class="page-link" href="{{ $postes->url(1) }}">← First Page</a>
    </li>

    <li class="page-item @if($postes->currentPage() == 1) disabled @endif">
        <a class="page-link" href="{{ $postes->previousPageUrl() }}">← Previous Page</a>
    </li>


    @for ($i = 1; $i <= $postes->lastPage(); $i++)

        <li class="page-item {{ ($postes->currentPage() == $i) ? ' active' : '' }}">
            <a class="page-link" href="{{ $postes->url($i) }}">{{ $i }}</a>
        </li>

    @endfor


    <li class="page-item @if($postes->lastPage() == $postes->currentPage()) disabled @endif">
        <a class="page-link" href="{{ $postes->nextPageUrl() }}">Next Page →</a>
    </li>

    <li class="page-item @if($postes->lastPage() == $postes->currentPage()) disabled @endif">
        <a class="page-link" href="?page={{ $postes->lastPage() }}">Last Page →</a>
    </li>
</ul>