<section class="section" id="{{ $id ?? 'intro' }}">
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-6 text-center text-md-right">
                <h3 class="fw-500">{{ $title }}</h3>
                <br>
                <p>
                    {{ $slot }}
                </p>
            </div>
            <div class="col-md-6">
                <img class="rounded-md ml-md-4" src="{{ $image }}" alt="...">
            </div>
        </div>
    </div>
</section>