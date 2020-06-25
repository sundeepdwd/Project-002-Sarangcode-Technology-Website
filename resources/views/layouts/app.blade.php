<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Meta Information --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sarangcode Technology') }}</title>

    {{-- Styles --}}
    @include('includes.styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper" id="app">
        @include('includes.header')
        @include('includes.sidebar')

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>           
        </main>

        @include('includes.footer')
    </div>
    @include('includes.scripts')
</body>

</html>