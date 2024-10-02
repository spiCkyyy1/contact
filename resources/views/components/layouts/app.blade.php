<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="flex flex-col min-h-screen">
@include('components.layouts.partials.header')
<main class="flex-grow">
    <div class="container mx-auto py-8 px-4" id="app">
        {{$slot}}
    </div>
</main>

@include('components.layouts.partials.footer')
</body>
</html>
