<div class="section" id="contact">
    <div class="container">
        <header class="section-header">
            <h2>{{ __('landingpage.contact.title') }}</h2>
            <hr>
        </header>
        <div class="row gap-y">
            <div class="col-md-6">
                <form action="{{ route('contact') }}" method="POST" data-form="mailer">
                    @csrf
                    @if(session()->has('sent'))
                        <div class="alert alert-success">{{ __('landingpage.contact.success') }}</div>
                    @endif
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="name" placeholder="{{ __('landingpage.contact.name') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="phone" placeholder="{{ __('landingpage.contact.phone') }}">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" placeholder="{{ __('landingpage.contact.email') }}">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-lg" name="message" rows="4" placeholder="{{ __('landingpage.contact.message') }}"></textarea>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('landingpage.contact.button') }}</button>
                </form>
            </div>
            <div class="col-md-5 ml-auto">
                <div class="h-full p-5">
                    <p>{{ __('landingpage.contact.info') }}</p>
                        <hr class="w-20 my-6">
                        <p class="lead">
                            {{ $company }}<br>
                            {{ $street }}<br>
                            {{ $city }}
                        </p>
                    <div>
                        <span class="d-inline-block w-9 text-lighter">{{ __('landingpage.contact.vat') }}</span>
                        <span class="small-1">{{ $cvr }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>