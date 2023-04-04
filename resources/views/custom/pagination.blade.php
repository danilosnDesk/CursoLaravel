<div class="flex justify-center py-10">
    <nav aria-label="Page navigation example">
        @if ($paginator->hasPages())
            <ul class="list-style-none flex pagination items-center justify-center">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li>
                        <a
                            class="disabled pointer-events-none relative block rounded-full bg-transparent py-1.5 px-3 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Sem</a>
                    </li>
                @else
                    <a href="{{ $paginator->nextPageUrl() }}"
                        class="relative block rounded-full bg-transparent py-1.5 px-3 text-2xl text-red-500 transition-all duration-300 ">
                        <i class="bi bi-arrow-left-circle-fill"></i> </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li
                            class="disabled relative block rounded-full bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100  dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white">
                            {{ $element }}</li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li aria-current="page">
                                    <a class="relative block rounded-full bg-primary-100 py-1.5 px-3 text-sm font-medium text-primary-700 transition-all duration-300"
                                        href="#!">{{ $page }}
                                        <span
                                            class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]">{{ $page }}</span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="relative block rounded-full bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"
                                        href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}"
                        class="relative block rounded-full bg-transparent py-1.5 px-3 text-2xl text-red-500 transition-all duration-300 ">
                        <i class="bi bi-arrow-right-circle-fill"></i>
                    </a>
                @else
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}"
                            class="disabled pointer-events-none relative block rounded-full bg-transparent py-1.5 px-3 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Sem</a>
                    </li>
                @endif
            </ul>
    </nav>
</div>
@endif
