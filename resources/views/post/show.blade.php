<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-3xl mb-4">{{ $post->title }}</h1>
                <div class="flex gap-4">
                    @if ($post->user->image)
                        <img src="{{ $post->user->imageUrl() }}" alt="{{ $post->user->name }}" class="w-12 h-12 rounded-full">
                    @else
                        <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Dummy Avatar" class="w-12 h-12 rounded-full">
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
