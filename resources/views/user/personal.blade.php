@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            {{ $user->name }}'s Details
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto pb-10">
        <a 
                        href="/personal/{{ $user->id }}/edit"
                        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Edit
                    </a>
    </div>
@endif

<div class="w-4/5 m-auto pt-1">
    <span class="text-gray-500">Created on {{ date('jS M Y', strtotime($user->updated_at)) }}
    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        First Name
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $user->first_name }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Last Name
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $user->last_name }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Email
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $user->email }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Date of Birth
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ date('jS M Y', strtotime($user->date_of_birth)) }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Phone No.
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $user->phone }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Favourite Marvel Character
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $user->favourite_char }}
    </p>

    <p class="text-xl text-gray-700 font-bold pt-8 pb-1 leading-8 font-light">
        Bio
    </p>
    <p class="text-xl text-gray-700 pt-2 pb-2 leading-8 font-light">
        {{ $user->bio }}
    </p>


</div>

@endsection