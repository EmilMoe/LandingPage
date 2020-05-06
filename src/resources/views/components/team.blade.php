<section class="section" id="{{ $id ?? 'team' }}">
    <div class="container">
        <header class="section-header">
            <h2>{{ __('landingpage::team.title') }}</h2>
        </header>

        <div class="row gap-y">
            @foreach($members as $member)
                <div class="col-md-4 team-2">
                    <img src="{{ $member['image'] }}" alt="...">
                    <h5>{{ $member['name'] }}</h5>
                    <small>{{ $member['title'] }}</small>
                    
                    @if(isset($member['info']))
                        <p>{{ $member['info'] }}</p>
                    @endif
                    
                    @if(isset($member['email']))
                        <br>
                        <div class="social social-brand">
                            <a class="social-email" href="mailto:{{ $member['email'] }}"><i class="fa fa-mail"></i></a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>