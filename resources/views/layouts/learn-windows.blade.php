@php
    $lowercaseTitle = $title ?  strtolower(\Illuminate\Support\Str::replace(' ', '-', $title)) : $title;
@endphp

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="description" content="{{ $description ?? 'Welcome to Learn Windows' }}">
    <title>Learn Windows: {{ $title ?? 'Learn Windows' }}</title>
    <x-layout.favicons/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased">
<div class="flex flex-col space-y-4 min-h-screen text-gray-800 bg-gray-100">
    <header class="shadow bg-white/70 sticky inset-0 backdrop-blur-sm z-10">
        {{--  Navigation  --}}
        <x-layout.nav/>
    </header>
    <div class="NDDoc container mx-auto p-4 flex-1 px-4">
        <main>
            <div class="nd-doc">
                <h1 class="group"
                    id="{{ $lowercaseTitle }}"
                    tabindex="-1">
                    {{ $subtitle ?? $title ?? "This page has no (sub)title" }}
                    <a href="#{{ $lowercaseTitle }}"
                       class="header-anchor  group-hover:opacity-100">#</a>
                </h1>
                {{ $slot }}
            </div>
        </main>
    </div>
    <x-layout.footer/>
</div>
@stack('script')
@livewireScripts
</body>
</html>
