<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Remove extra padding -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- IMPORTANT: Change p-4 to px-0 to remove horizontal padding -->
                <div class="px-0 text-gray-900">
                    <x-category-tabs name="Tarun">No categories Found.</x-category-tabs>
                </div>
            </div>

            <div class="mt-8 text-gray-900">
                <div class="p-4">
                    @forelse ($posts as $post)
                        <x-post-item :post="$post"></x-post-item>
                    @empty
                        <div class="text-center text-gray-400 py-16">No Posts Found.</div>
                    @endforelse
                    {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>