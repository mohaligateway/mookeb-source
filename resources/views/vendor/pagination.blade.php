@if ($paginator->hasPages())

    <nav role="navigation" class="flex items-center justify-between">

        <ul class="pagination d-none">
            <li class="page-item">
                @if ($paginator->onFirstPage())
                    <span
                        class="relative d-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" dusk="previousPage.before"
                        class="relative d-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
                </span>

            <li class="page-item">
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" dusk="nextPage.before"
                        class="relative d-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span
                        class="relative d-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
                </span>
        </ul>

        <div>

            <div class="relative d-flex align-items-center justify-content-end">

                {{-- Pagination Elements --}}
                <div class="d-flex">
                    <ul class="pagination mb-0">

                        {{-- Previous Page Link --}}
                        @if ($paginator->onFirstPage())
                            <li class="page-item">
                                <a class="page-link bg-golden" aria-label="{{ __('pagination.next') }}" disabled>
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a wire:click="previousPage" dusk="previousPage.after" rel="prev" class="page-link bg-golden"
                                    aria-label="{{ __('pagination.previous') }}">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </li>
                        @endif

                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span aria-disabled="true" class="align-items-center d-flex mx-2">
                                    <span class="relative d-flex align-items-center px-">{{ $element }}</span>
                                </span>
                            @endif
                            {{-- Array Of Links --}}

                            @if (is_array($element))

                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li wire:key="paginator-page{{ $page }}" class="page-item">
                                            <span aria-current="page">
                                                <span class="page-link active">
                                                    {{ $page }}
                                                </span>
                                            </span>
                                        </li>
                                    @else
                                        <li wire:key="paginator-page{{ $page }}" class="page-item">
                                            <a wire:click="gotoPage({{ $page }})" class="page-link"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach

                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li class="page-item">
                                <a wire:click="nextPage" dusk="nextPage.after" rel="next" class="page-link bg-golden"
                                    aria-label="{{ __('pagination.next') }}">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link bg-golden" aria-label="{{ __('pagination.next') }}" disabled>
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </li>
                        @endif

                    </ul>

                </div>
            </div>

        </div>

    </nav>

@endif
