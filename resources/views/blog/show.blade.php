@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5 pt-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-1">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="">
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        Released on {{ date('jS M Y', strtotime($post->release_date)) }}
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        The main character of this film is {{ $post->main_character }}
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        A movie length of {{ $post->runtime }} minutes
    </p>
    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Description
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>

@endsection 