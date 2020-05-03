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
            <div>
                @auth
                    @if(isset($app))
                        <a class="btn btn-sm btn-success ml-lg-5 mr-2" href="{{ $app }}">Start</a>
                        <a class="btn btn-sm btn-light" href="{{ route('logout') }}">Log out</a>
                    @endif
                @endauth
            </div>
        </section>
    </div>
</nav>