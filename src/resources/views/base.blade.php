<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    <head profile="http://www.w3.org/2005/10/profile">
        <title>
            @yield('title', config('app.name', ''))
        </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="app-url" content="{{ url('/') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('icon/site.webmanifest') }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="{{ route('landingpage.style') }}" rel="stylesheet">

        <script src="https://use.fontawesome.com/eb84a36217.js"></script>
        <style>
            main > section:nth-child(odd) {
                background-color: #fafbfb;
            }
        </style>
    </head>
    <body class="h-100">
        @include('LandingPage::navbar', [
            'logo' => $logo ?? null,
            'app' => $app ?? null,
            'nav' => $nav ?? [],
            'call_to_action' => null,
        ])

        <main class="main-content">
            @include('LandingPage::cover')
            @yield('content')
        </main>

        <x-landing-page-footer
                :linkedin="$linkedin"
                :facebook="$facebook">
            <x-slot name="footer">
                @yield('footer')
            </x-slot>
        </x-landing-page-footer>

        @if(env('APP_ENV') !== 'local')
            <script src="//cdn.polyfill.io/v2/polyfill.min.js"></script>
        @endif
    </body>
</html>
