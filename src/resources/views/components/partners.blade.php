<section class="section py-4" id="{{ $id }}">
    <div class="container my-4 py-4">
        <div class="partner d-flex justify-content-around">
            @foreach($partners as $name => $logo)
                <img src="{{ $logo }}" style="height: 40px;" alt="{{ $name }}">
            @endforeach
        </div>
    </div>
</section>