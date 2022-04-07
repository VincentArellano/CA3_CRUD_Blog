@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5 pt-15">
        <h1 class="text-6xl">
            {{ $user->name }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-1">
    <p class="text-xl text-gray-700 pt-2 pb-10 leading-8 font-light">
        {{ $user->email }}
    </p>
</div>

@endsection