@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-5 pt-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>
</div>
<div class="sm:grid grid-cols-2 w-4/5 mx-auto py-15">
    <div class="pt-2 pb-10 leading-8 font-light">
        <img src="{{ asset('images/' . $post->image_path) }}" class="min-w-image min-h-image max-w-xs max-h-100" alt="">
    </div>
    <div>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light mb-16">
        Released on {{ date('jS M Y', strtotime($post->release_date)) }}. The main character of this film is {{ $post->main_character }}. A movie length of {{ $post->runtime }} minutes. {{ $post->description }}
    </p>
    <a href="/blog" class="uppercase bg-red-500 text-gray-100 text-lg font-extrabold ml-80 py-4 px-8 rounded-3xl">
    Go Back
</a>
</div>

</div>

@endsection 