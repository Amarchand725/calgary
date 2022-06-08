<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="footer-contact">
                    <h2>Get In Touch</h2>
                    <p>
                        <i class="fa fa-map-marker-alt"></i>{!! $home_page_data['footer_address'] !!}
                    </p>
                    <p><i class="fa fa-phone-alt"></i>{!! $home_page_data['footer_phone'] !!}</p>
                    <p><i class="fa fa-envelope"></i>
                        <a href="#" class="text-white">{!! $home_page_data['footer_email'] !!}</a>
                    </p>
                    <p><i class="fa fa-globe"></i><a href="{!! $home_page_data['contact_website'] !!}"
                            class="text-white">{!! $home_page_data['contact_website'] !!}</a></p>

                    <div class="footer-social">
                        <a href="{!! $home_page_data['footer_twitter'] !!}" target="_blank" class="twitter btn"><i class="fab fa-twitter"></i></a>
                        <a href="{!! $home_page_data['footer_facebook'] !!}" target="_blank" class="facebook btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="{!! $home_page_data['footer_instagram'] !!}" target="_blank" class="instagram btn"><i class="fab fa-instagram"></i></a>
                        <a href="{!! $home_page_data['footer_youtube'] !!}" target="_blank" class="youtube btn"><i class="fab fa-youtube"></i></a>
                        <a href="{!! $home_page_data['footer_skype'] !!}" target="_blank" class="google-plus btn"><i class="fab fa-skype"></i></a>
                        <a href="{!! $home_page_data['footer_linkedin'] !!}" target="_blank" class="linkedin btn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                    <a href="{{ route('services') }}">Our Service</a>
                    <a href="{{ route('prices') }}">Pricing Plan</a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form action="{{ route('subscriber.store') }}" method="Post">
                        @csrf

                        <input class="form-control" name="name" placeholder="Full Name" />
                        <span style="color: red">{{ $errors->first('name') }}</span>
                        <input class="form-control" name="email" placeholder="Email" required />
                        <span style="color: red">{{ $errors->first('email') }}</span>
                        <button type="submit" class="btn btn-custom">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>
            &copy; <a href="{{ route('about') }}">CalGary</a>, {!! $home_page_data['footer_copy_right'] !!}
        </p>
    </div>
</div>