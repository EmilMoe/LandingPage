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
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#units">Units</a>
                <a class="nav-link" href="#pivot">Pivot</a>
                <a class="nav-link" href="#integrations">Integration</a>
                <a class="nav-link" href="#contact">Contact</a>
            </nav>
            <div>
                @auth
                    @if(config('landingpage.app.route'))
                        <a class="btn btn-sm btn-success ml-lg-5 mr-2" href="{{ route(config('landingpage.app.route'), config('landingpage.app.parameters')) }}">Start</a>
                        <a class="btn btn-sm btn-light" href="{{ route('logout') }}">Log out</a>
                    @endif
                @endauth
            </div>
        </section>
    </div>
</nav>