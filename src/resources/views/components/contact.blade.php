<div class="section" id="contact">
    <div class="container">
        <header class="section-header">
            <h2>Contact</h2>
            <hr>
        </header>
        <div class="row gap-y">
            <div class="col-md-6">
                <form action="{{ route('contact') }}" method="POST" data-form="mailer">
                    @csrf
                    @if(session()->has('sent'))
                        <div class="alert alert-success">We received your message and will contact you back soon.</div>
                    @endif
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="phone" placeholder="Your phone number">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-lg" name="message" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Send Inquiry</button>
                </form>
            </div>
            <div class="col-md-5 ml-auto">
                <div class="h-full p-5">
                    <p>If you have any questions feel free to leave us a message and we will reach back to you as soon as possible.</p>
                        <hr class="w-20 my-6">
                        <p class="lead">
                            {{ $company }}<br>
                            {{ $street }}<br>
                            {{ $city }}
                        </p>
                    <div>
                        <span class="d-inline-block w-9 text-lighter">CVR</span>
                        <span class="small-1">{{ $cvr }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>