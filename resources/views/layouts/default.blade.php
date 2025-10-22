<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name', 'Sisdeve - Modelo') }}</title>
  <meta name="author" content="Winston Hanun Júnior">
  <meta name="description" content="Corrigir">
  <meta name="keywords" content="Corrigir">


  @vite(['resources/scss/app.scss'])

</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">
    @include('layouts.parts.header')

    @include('layouts.parts.sidebar')

    <main class="app-main">
      @include('layouts.parts.content-header')
      <div class="app-content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </main>

    @include('layouts.parts.footer')
  </div>
  @vite('resources/js/app.js')
</body>

</html>