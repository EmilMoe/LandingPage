<header class="header text-center text-lg-left pb-0" style="background-color: #f8fcff">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-5 align-self-center pb-lg-9">
                <h1>
                    {{ $title ?? '' }}
                </h1>
                <p class="lead mt-5 mb-8">
                    {{ $text ?? '' }}
                </p>
                <p class="gap-xy">
                    @if(\Route::has('register'))
                        <a class="btn btn-round btn-primary mw-150" href="{{ route('register') }}">Sign up now</a>
                    @else
                        <a class="btn btn-round btn-primary mw-150" href="#contact">Request presentation</a>
                    @endif
                </p>
            </div>
            <div class="col-lg-6 ml-auto align-self-end">
                <img class="shadow-6 mt-6 border" src="{{ $image }}" alt="product">
            </div>
        </div>
    </div>
</header>