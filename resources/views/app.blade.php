<!--
      ___           ___                       ___           ___
     /  /\         /  /\        ___          /  /\         /__/\
    /  /::\       /  /::\      /  /\        /  /::\        \  \:\
   /  /:/\:\     /  /:/\:\    /  /:/       /  /:/\:\        \  \:\
  /  /:/  \:\   /  /:/~/:/   /__/::\      /  /:/  \:\   _____\__\:\
 /__/:/ \__\:\ /__/:/ /:/___ \__\/\:\__  /__/:/ \__\:\ /__/::::::::\
 \  \:\ /  /:/ \  \:\/:::::/    \  \:\/\ \  \:\ /  /:/ \  \:\~~\~~\/
  \  \:\  /:/   \  \::/~~~~      \__\::/  \  \:\  /:/   \  \:\  ~~~
   \  \:\/:/     \  \:\          /__/:/    \  \:\/:/     \  \:\
    \  \::/       \  \:\         \__\/      \  \::/       \  \:\
     \__\/         \__\/                     \__\/         \__\/


     ...welcomes you
                        -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ 'tırnak içinde dergi' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    @routes

    <meta name="description" content="kültür, sanat ve edebiyat dergisi."/>
    <meta property="og:description" content="kültür, sanat ve edebiyat dergisi.">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:image" content="{{ asset('media/logo.webp') }}"/>
    <link rel="canonical" href="https://tirnakicindedergi.com"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-primary-500">
@inertia
</body>
</html>
