<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            
            @if($home_page_data['header_logo'])
                <div class="col-lg-3 col-md-12">
                    <div>
                        <a href="{{ url('/') }}"> 
                            <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_logo'] }}" alt="logo" class="img-fluid">
                        </a>
                    </div>
                </div>
            @endif
            <div class="col-lg-9 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Opening Hour</h3>
                                <p>Mon - Fri, {!! date('h:i A', strtotime($home_page_data['weekdays_morning_from_time'])) !!} - {!! date('h:i A', strtotime($home_page_data['weekdays_evening_to_time'])) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Call Us</h3>
                                <p>{!! $home_page_data['header_phone'] !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email Us</h3>
                                <p>{!! $home_page_data['header_email'] !!} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>