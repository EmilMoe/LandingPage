<section class="section" id="{{ $id ?? 'process' }}">
    <div class="container">
        <header class="section-header">
            <h2>{{ $title }}</h2>
            <hr>
            <p class="lead">{{ $info }}</p>
        </header>

        @foreach($steps as $step)
            <div class="row gap-y align-items-center py-7">
                @if($loop->odd)
                    <div class="col-md-5 mr-auto text-center text-md-left">
                @else
                    <div class="col-md-6 text-center">
                        @if(isset($step['image']))
                            <img src="{{ $step['image'] }}" alt="{{ $step['title'] }}">
                        @endif
                    </div>
                    <div class="col-md-5 ml-auto text-center text-md-left">
                @endif
                    <p class="lead-9 fw-900 lh-1 opacity-10">{{ str_pad(($loop->index + 1), 2, '0', STR_PAD_LEFT) }}</p>
                    <h3>{{ $step['title'] }}</h3>
                    <p>{!! $step['info'] !!}</p>
                </div>
                @if($loop->odd)
                    <div class="col-md-6 text-center order-first order-md-last">
                        @if(isset($step['image']))
                            <img src="{{ $step['image'] }}" alt="{{ $step['title'] }}">
                        @endif
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</section>