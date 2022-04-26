@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            {{ $user->name }}'s Details
        </h1>
        <div class="pt-5"><span class="text-gray-500">Created on {{ date('jS M Y', strtotime($user->updated_at)) }}</span></div>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-9/12 m-auto mt-10 pl-2">
        <p class="pl-5 w-full mb-4 text-gray-50 bg-red-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto pb-10">
        <a 
                        href="/personal/{{ $user->id }}/edit"
                        class="bg-red-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold ml-16 py-3 px-5 rounded-3xl">
                        Edit
                    </a>
    </div>
@endif

<div class="sm:grid grid-cols-2 w-4/5 m-auto pt-1">
    <div>
    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-16">
        First Name
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-16">
        {{ $user->first_name }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-16">
        Last Name
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-16">
        {{ $user->last_name }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-16">
        Email
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-16">
        {{ $user->email }}
    </p>
</div>

<div>
    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-48">
        Date of Birth
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-48">
        {{ date('jS M Y', strtotime($user->date_of_birth)) }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-48">
        Phone No.
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-48">
        {{ $user->phone }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-48">
        Favourite Marvel Character
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-48">
        {{ $user->favourite_char }}
    </p>
</div>
</div>
<div class=" w-4/5 m-auto pt-1">
    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light pl-16">
    Bio
</p>
<p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light pl-16">
    {{ $user->bio }}
</p></div>

@endsection