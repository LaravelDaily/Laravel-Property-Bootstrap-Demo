<div class="row align-items-center py-5">
    @if ($paginator->hasPages())
        <div class="col-lg-3">Pagination ({{ $paginator->currentPage() }} of {{ $paginator->lastPage() }})</div>

        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

        <div class="col-lg-6 text-center">
            <div class="custom-pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span aria-hidden="true">&lsaquo;</span>
                    </a>
                @else
                    <a type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="previousPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <a class="disabled" aria-disabled="true"><span >{{ $element }}</span></a>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <a class="active" wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}" aria-current="page"><span class="active">{{ $page }}</span></a>
                            @else
                                <span wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}"><a type="button" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</a></span>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" wire:click="nextPage('{{ $paginator->getPageName() }}')" wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                @else
                    <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">&rsaquo;</span>
                    </a>
                @endif
            </div>
        </div>
    @endif
</div>
