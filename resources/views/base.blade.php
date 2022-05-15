<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{$titre}}</title>

</head>

<body class="py-6 flex flex-col justify-between items-center min-h-screen">
    <main role="main" class="flex flex-col items-center">
        @yield('content')
    </main>
    <!--yield cest le bloc de contenu de base @ cest la directive de laravel-->

    <footer>
        <p class="text-gray-500">&copy;Copyright {{date('Y')}}
            @if (!Route::is('app_about'))
            &middot; <a href="{{route('app_about')}}" class="text-indigo-500 hover:text-indigo-700 underline">About
                us</a></p>
        @endif
    </footer>
</body>

</html>