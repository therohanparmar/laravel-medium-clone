@props(['user' , 'size' => ['w-12 h-12']])

@if ($user->image)
<img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full">
@else
<img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Dummy Avatar" class="{{ $size }} rounded-full">
@endif
