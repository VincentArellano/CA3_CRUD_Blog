@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you know any Marvel characters?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-red-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/avas_p_0189_ss13_copy.jpg" class="min-h-image min-w-image" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Do you know which comic book characters appears in the MCU?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                The Marvel Cinematic Universe (MCU) is an American media franchise and shared universe centered on a series of superhero films produced by Marvel Studios.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                The films are based on characters that appear in American comic books published by Marvel Comics. The franchise also includes television series, short films, digital series, and literature. The shared universe, much like the original Marvel Universe in comic books, was established by crossing over common plot elements, settings, cast, and characters.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-red-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-red-700 text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            In this website you can...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Add Blogs
        </span>
        <span class="font-extrabold block text-4xl py-1">
            View Blogs
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Change Blogs
        </span>
        <span class="font-extrabold block text-4xl py-1">
            And Many More
        </span>
    </div>

    <div class="text-center py-15 pb-5">
        <h2 class="text-4xl font-bold py-10">
            Login to add new blogs
        </h2>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-red-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Benefits
                </span>

                <h3 class="text-xl font-bold py-10 pb-2">
                    You are able to create yourself some post and become familiar to the web.
                </h3>
                <h3 class="text-xl font-bold py-10 pt-2">
                    Why not join to find out more.
                </h3>

                <a 
                    href="/register"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Register Now
                </a>
            </div>
        </div>
        <div>
            <img src="https://r1.ilikewallpaper.net/pic/201501/papers_co_ai54_marvel_logo_film_art_illust_minimal_6_wallpaper_640.jpg" class="min-w-image" alt="">
        </div>
    </div>
@endsection