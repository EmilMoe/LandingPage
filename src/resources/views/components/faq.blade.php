<section class="section" id="{{ $id ?? 'faq' }}">
    <div class="container">
        <header class="section-header">
            <h2>{{ $title }}</h2>
            <hr>
            <p>{{ $info }}</p>
        </header>
        <div class="row gap-y">
            @foreach($faq as $title => $text)
                <div class="col-md-6">
                    <h5>{{ $title }}</h5>
                    <p>
                        {{ $text }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>