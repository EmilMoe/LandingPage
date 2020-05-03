<section class="section overflow-hidden py-120" id="{{ $id }}">
    <div class="container-wide">
        <div class="row">
            @if($imageLeft)
                <div class="col-12 col-md-5 text-center">
                    <img class="mr-40 border shadow-5" src="{{ $image }}" alt="{{ $title }}">
                </div>

                <div class="col-12 col-md-5 offset-md-1 align-self-center pb-70">
                    <h3>{{ $title }}</h3>
                    <p>
                        {{ $info }}
                    </p>
                    <br>
                    <div class="row gap-y">
                        {{ $slot }}
                    </div>
                </div>
            @endif

            @if(! $imageLeft)
                <div class="col-12 col-md-5 offset-md-1 align-self-center pb-70">
                    <h3>{{ $title }}</h3>
                    <p>
                        {{ $info }}
                    </p>
                    <br>
                    <div class="row gap-y">
                        {{ $slot }}
                    </div>
                </div>

                <div class="col-5 offset-1 align-self-center">
                    <img class="ml-40 border shadow-5" src="{{ $image }}" alt="{{ $title }}">
                </div>
            @endif
        </div>
    </div>
</section>