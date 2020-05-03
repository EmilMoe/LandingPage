<section class="section" id="{{ $id }}">
    <div class="container">
        <header class="section-header">
            <h2>{{ $title }}</h2>
            <hr>
            <p class="lead">
                {[ $info ]} 
            </p>
        </header>
        <div class="row gap-y">
            {{ $slot }}
        </div>
    </div>
</section>