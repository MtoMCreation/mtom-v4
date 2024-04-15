<!DOCTYPE html>

<!--
░█▄█░▀█▀░█▀█░█▄█░░░█▀▀░█▀▄░█▀▀░█▀█░▀█▀░▀█▀░█▀█░█▀█
░█░█░░█░░█░█░█░█░░░█░░░█▀▄░█▀▀░█▀█░░█░░░█░░█░█░█░█
░▀░▀░░▀░░▀▀▀░▀░▀░░░▀▀▀░▀░▀░▀▀▀░▀░▀░░▀░░▀▀▀░▀▀▀░▀░▀
Marseille - Montréal
Création de site web et stratégie digitale
2024 ©
-->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href="{{ asset('favicon.png') }}">

        <meta name="description" content="{{ $description ?? 'Page Description' }}">

        <title>{{ $title ?? 'Page Title' }}</title>


        @vite('resources/css/app.css')

    </head>
    <body>

    <x-layouts.header />


    <main>
        {{ $slot }}
    </main>

    <x-layouts.footer />

    </body>
</html>
