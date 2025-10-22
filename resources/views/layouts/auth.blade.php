<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="author" content="Winston Hanun Júnior">
  <meta name="description" content="Corrigir">
  <meta name="keywords" content="Corrigir">


  @vite(['resources/scss/app.scss'])

</head>

<body class="@yield('body-class') bg-body-secondary">
    @yield('content')

    @vite('resources/js/app.js')
</body>

</html>
