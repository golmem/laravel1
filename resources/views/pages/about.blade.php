@extends('base')

@section('title','About-us | '.config('app.name'))

@section('content')
<!--utilisation des helpers pour les fichiers statiques-->
<img src=" {{asset('/images/1918.jpg') }} " width="300" height="150" alt="hacker"
    class="rounded-full sm:rounded-md shadow-md my-12">
<h2 class="mt-5 text-gray-800 font-semi-bold text-lg">
    built with les teachers du net <span class="text-pink-500">&hearts;</span>
</h2>
<p class="mt-5">
    <a href=" {{route('app_home')}} " class="text-indigo-500 hover:text-indigo-700 underline">revenir à la page
        d'accueil</a>
</p>
@endsection