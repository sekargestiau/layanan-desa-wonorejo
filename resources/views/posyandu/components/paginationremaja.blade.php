<nav aria-label="Page navigation example"
    class="flex justify-center py-3 text-gray-900 bg-white dark:text-white dark:bg-gray-800">
    <ul class="inline-flex -space-x-px text-sm mx-auto">
        <li>
            <a href="{{ $remajas->previousPageUrl() }}"
                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg 
                   {{ $remajas->onFirstPage() ? 'text-gray-300 cursor-not-allowed pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700' : 'hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' }}"
                @if ($remajas->onFirstPage()) aria-disabled="true" tabindex="-1" @endif>
                < </a>
        </li>

        @for ($i = 1; $i <= $remajas->lastPage(); $i++)
            <li>
                <a href="{{ $remajas->url($i) }}"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 
                       {{ $remajas->currentPage() == $i ? 'bg-blue-500 text-white' : 'bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor

        <li>
            <a href="{{ $remajas->nextPageUrl() }}"
                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg 
                   {{ $remajas->hasMorePages() ? 'hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white' : 'text-gray-300 cursor-not-allowed pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700' }}"
                @if (!$remajas->hasMorePages()) aria-disabled="true" tabindex="-1" @endif>
                >
            </a>
        </li>
    </ul>
</nav>
