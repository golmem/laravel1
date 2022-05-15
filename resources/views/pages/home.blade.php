@extends('base')

@section('title')

@section('content')
<img src=" {{asset('images/FlagQuebec.png') }} " width="300" height="150" alt="drapeau du quebec"
    class="rounded-full sm:rounded-md shadow-md mt-12">
<h1 class="mt-5 text-indigo-600 font-semi-bold text-3xl sm:text-5xl">hello from quebec</h1>
<p class="text-gray-800 text-lg">it's currently {{date('h:i A')}} </p>
@endsection