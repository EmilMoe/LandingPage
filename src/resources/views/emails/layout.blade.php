@if(\View::exists('emails.layout'))
    @extends('emails.layout')
    @section('content')
        @yield('__content')
    @endsection
@else
    <p>
        @yield('__content')
    </p>
    <p>
        Kindly,<br>
        {{ env('APP_NAME') }}
    </p>
@endif