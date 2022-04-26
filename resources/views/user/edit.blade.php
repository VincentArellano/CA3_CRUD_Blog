@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update User
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/personal/{{ $user->id }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="name"
            placeholder="Name..."
            value="{{ $user->name }}"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
        
        <input 
            type="email"
            name="email"
            placeholder="Email..."
            value="{{ $user->email }}"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

            <input 
            type="date"
            name="date_of_birth"
            placeholder="Date of Birth (as YYYY-MM-DD)"
            value="{{ $user->date_of_birth }}"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

        <input 
            type="text"
            name="first_name"
            placeholder="First Name"
            value="{{ $user->first_name }}"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

        <input 
            type="text"
            name="last_name"
            placeholder="Last Name"
            value="{{ $user->last_name }}"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

        <input 
            type="text"
            name="phone"
            placeholder="Phone No."
            value="{{ $user->phone }}"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">
        
        <input 
            type="text"
            name="favourite_char"
            placeholder="Favourite Marvel Character"
            value="{{ $user->favourite_char }}"
            class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">

        
        <textarea 
            name="bio"
            placeholder="Bio..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $user->bio }}</textarea> 

        <button    
            type="submit"
            class="uppercase mt-15 bg-red-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>

@endsection