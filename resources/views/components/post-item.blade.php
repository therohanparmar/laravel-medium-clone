<div
class="flex bg-white border border-gray-200 rounded-lg shadow-sm mb-8">
<a href="#">
    <img class="rounded-l-lg w-48 h-48 object-cover"
        src="{{ $post->imageUrl('preview') }}" alt="Image" />
</a>
<div class="p-5 flex-1">
    <a href="{{ route('post.show',['username' => $post->user->username, 'post' => $post->slug]) }}">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            {{ $post->title }}</h5>
    </a>
    <div class="mb-3 font-normal text-gray-700">
        {{ Str::words($post->content, 20) }}
    </div>
    <div class="text-sm text-gray-400 flex gap-4">
        <div class="">
            by
            <a href="{{ route('profile.show', $post->user->username) }}" class="text-gray-600 hover:underline">
                {{ $post->user->username }}
            </a>
            at
            {{ $post->created_at->format('M d, Y') }}
        </div>
        <span class="inline-flex gap-1 items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" aria-label="clap"
            class="text-gray-500 hover:text-gray-900">
                <path fill="currentColor" fill-rule="evenodd"
                    d="M11.37.828 12 3.282l.63-2.454zM15.421 1.84l-1.185-.388-.338 2.5zM9.757 1.452l-1.184.389 1.523 2.112zM20.253 11.84 17.75 7.438c-.238-.353-.57-.584-.93-.643a.96.96 0 0 0-.753.183 1.13 1.13 0 0 0-.443.695c.014.019.03.033.044.053l2.352 4.138c1.614 2.95 1.1 5.771-1.525 8.395a7 7 0 0 1-.454.415c.997-.13 1.927-.61 2.773-1.457 2.705-2.704 2.517-5.585 1.438-7.377M12.066 9.01c-.129-.687.08-1.299.573-1.773l-2.062-2.063a1.123 1.123 0 0 0-1.555 0 1.1 1.1 0 0 0-.273.521z"
                    clip-rule="evenodd"></path>
                <path fill="currentColor" fill-rule="evenodd"
                    d="M14.741 8.309c-.18-.267-.446-.455-.728-.502a.67.67 0 0 0-.533.127c-.146.113-.59.458-.199 1.296l1.184 2.503a.448.448 0 0 1-.236.755.445.445 0 0 1-.483-.248L7.614 6.106A.816.816 0 1 0 6.459 7.26l3.643 3.644a.446.446 0 1 1-.631.63L5.83 7.896l-1.03-1.03a.82.82 0 0 0-1.395.577.81.81 0 0 0 .24.576l1.027 1.028 3.643 3.643a.444.444 0 0 1-.144.728.44.44 0 0 1-.486-.098l-3.64-3.64a.82.82 0 0 0-1.335.263.81.81 0 0 0 .178.89l1.535 1.534 2.287 2.288a.445.445 0 0 1-.63.63l-2.287-2.288a.813.813 0 0 0-1.393.578c0 .216.086.424.238.577l4.403 4.403c2.79 2.79 5.495 4.119 8.681.931 2.269-2.271 2.708-4.588 1.342-7.086z"
                clip-rule="evenodd"></path>
            </svg>
            {{  $post->claps_count }}
        </span>
    </div>
</div>
</div>
