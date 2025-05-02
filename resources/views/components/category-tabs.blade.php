<ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 w-full p-4 justify-center">
    <li class="me-2">
        <x-primary-button>
            <a href="#" aria-current="page">All</a>
        </x-primary-button>
    </li>
    @forelse ($categories as $category)
        <li class="me-2">
            <a href="#"
                class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white"
                aria-current="page">{{ $category->name }}</a>
        </li>
    @empty
        {{ $slot }}
    @endforelse
</ul>