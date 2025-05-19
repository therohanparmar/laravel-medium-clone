<ul
class="justify-center flex flex-wrap text-sm font-medium text-center text-gray-500">
<li class="me-2">
    <a href="/" class="inline-block px-4 py-2 rounded-lg {{ request('category') ? 'hover:text-gray-900 hover:bg-gray-100' : 'text-white bg-blue-600 active' }} ">
        All</a>
</li>
@foreach ($categories as $category)
    <li class="me-2">
        <a href="{{ route('post.byCategory', $category) }}"
            class="inline-block px-4 py-2 rounded-lg
            {{ Route::currentRouteNamed('post.byCategory') && request('category')->id == $category->id ? 'text-white bg-blue-600 active' : 'hover:text-gray-900 hover:bg-gray-100' }}">
            {{ $category->name }}</a>
    </li>
@endforeach
</ul>
