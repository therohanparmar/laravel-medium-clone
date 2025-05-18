<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-3xl mb-4">{{ $post->title }}</h1>
                <!-- User Avatar Section -->
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user" size='h-12 w-12' />
                    <div>
                        <x-follow-ctr :user="$post->user" class="flex gap-2">
                            <a href="{{ route('profile.show', ['user' => $post->user]) }}"  class="hover:underline">{{ $post->user->name }}</a>
                            &middot;
                            <button
                                @click="follow()"
                                :class="following ? 'text-red-600' : 'text-emerald-600'"
                                x-text="following ? 'Unfollow' : 'Follow'"
                            ></button>
                        </x-follow-ctr>
                        <div class="flex gap-2 text-gray-500 text-sm">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>

                <!-- Clap Section -->
                <x-clap-button :post="$post" />

                <!-- Post Content Section -->
                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">

                    <div class="mt-4">
                        {{ $post->content }}
                    </div>
                </div>

                <div class="mt-8 ">
                    <span class="px-4 py-2 bg-gray-300 rounded-xl">
                        {{ $post->category->name }}
                    </span>
                </div>

                <x-clap-button :post="$post" />

            </div>
        </div>
    </div>
</x-app-layout>
