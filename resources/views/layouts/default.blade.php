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

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <div class="app-wrapper">
      @include('layouts.parts.header')

      @include('layouts.parts.sidebar')

      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
        </div>
        <div class="app-content">
          @yield('content')
        </div>
      </main>
    </div>
    

    @vite(['resources/js/app.js'])

</body>

</html>