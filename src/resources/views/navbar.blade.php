<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="navbar-left mr-4">
            <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
            <a class="navbar-brand" href="{{ url('/') }}">
                @if(isset($logo))
                    <img class="logo-light" src="{{ $logo }}" alt="logo" style="height: 30px;">
                @else
                    {{ env('APP_NAME') }}
                @endif
            </a>
        </div>
        <section class="navbar-mobile">
            <nav class="nav nav-navbar mr-auto">
                @foreach($nav as $text => $link)
                    <a class="nav-link" href="{{ $link }}">{{ $text }}</a>
                @endforeach
            </nav>
            @if(isset($app))
                <div>
                    @auth
                        <a class="btn btn-sm btn-success" href="{{ $app }}">{{ __('landingpage::navbar.start') }}</a>
                        <a class="btn btn-sm btn-light" href="{{ route('logout') }}">{{ __('landingpage::navbar.signout') }}</a>
                    @else
                        <a class="btn btn-sm btn-outline-success" href="{{ route('login') }}">{{ __('landingpage::navbar.signin') }}</a>
                        <a class="btn btn-sm btn-success" href="{{ route('register') }}">{{ __('landingpage::navbar.register') }}</a>
                    @endauth
                </div>
            @endif
        </section>
    </div>
</nav>