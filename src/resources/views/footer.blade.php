<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-md-6 text-center text-md-left">
                <small>&copy; {{ env('APP_NAME') }} {{ date('Y') }}, All rights reserved.</small>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="social">
                    @if(isset($linkedin))
                        <a class="social-linkedin" href="https://www.linkedin.com/company/{{ $linkedin }}" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>