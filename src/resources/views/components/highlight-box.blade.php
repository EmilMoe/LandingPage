<div class="col-md-6">
    <div class="card p-5 shadow-3 hover-shadow-6 text-default">
        <p>
            {{ $icon ?? '' }}
        </p>
        <h5 class="fw-500 my-4">
            {{ $title }}
        </h5>
        <p class="mb-0">
            {{ $slot }}
        </p>
    </div>
</div>