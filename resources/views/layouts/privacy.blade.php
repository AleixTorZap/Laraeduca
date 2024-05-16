<!-- CAMBIAAAAAAR -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('help.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="">
    <x-banner />
    @livewire('navigation')

    <div style="background-color: var(--color-secondary); max-height: 100vh; overflow-y: auto;"
        class="bg-gray-300 h-100vh flex flex-col justify-center items-center p-4">
        <h1 class="mt-12 mb-16 text-white text-4xl font-bold">
            {{ $title }}</h1>
        <p class="mb-10 text-white text-center text-base max-w-4xl">
            {{ $content }}</p>
        {{ $slot }}

    </div>
    <div class="max-w-6xl mx-auto">

        @isset($headings)
            @foreach ($headings as $heading)
                {{ $heading['text'] }}</h1>
            @endforeach
        @endisset

        @isset($paragraphs)
            @foreach ($paragraphs as $paragraph)
                {{ $paragraph['text'] }}</p>
            @endforeach
        @endisset

        {{ $additionalContent ?? '' }}
    </div> <!-- Fin del nuevo div -->
    @stack('modals')
    @livewireScripts
</body>

</html>
