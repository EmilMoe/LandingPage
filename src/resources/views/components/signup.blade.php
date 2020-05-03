<section class="section text-center" id="signup">
    <div class="container">
        <header class="section-header">
            <h2>{{ $title ?? 'Sign up for free' }}</h2>
            <hr>
        </header>
        <div class="row">
            <form class="col-md-5 col-xl-6 mx-auto input-border" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-lg  @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm password"  required autocomplete="new-password">
                    </div>
                    <button class="btn btn-block btn-xl btn-success">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</section>