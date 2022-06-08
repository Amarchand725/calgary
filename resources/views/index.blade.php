@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                @foreach ($sliders as $slider)
                    <div class="carousel-item">
                        <div class="carousel-img">
                            @if($slider->image)
                                <img src="{{ asset('public/admin/images/slider') }}/{{ $slider->image }}" alt="Slider Image" height="200px" width="500px">
                            @else 
                                <img src="{{ asset('public/admin/images/slider/no-photo1.jpg') }}" alt="Slider Image" height="200px" width="500px">
                            @endif
                        </div>
                        <div class="carousel-text">
                            <h3>{{ $slider->hasService->name }}</h3>
                            <h1>{{ $slider->title }}</h1>
                            <p>{!! $slider->description !!}</p>
                            <a class="btn btn-custom" href="{{ route('services') }}">Request Service</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    @if($home_page_data['about_side_image'])
                        <div class="about-img">
                            <img src="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['about_side_image'] }}" alt="logo" class="img-fluid">
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>{!! isset($home_page_data['about_heading'])?$home_page_data['about_heading']:'' !!}</h2>
                    </div>
                    <div class="about-content">
                        <p>{!! isset($home_page_data['about_content'])?$home_page_data['about_content']:'' !!}</p>
                        {{-- <ul>
                            <li>
                                <i class="far fa-check-circle"></i>Auto Repair
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>Alloy Wheel Service
                            </li>
                            <li><i class="far fa-check-circle"></i>Auto Detailing Service </li>
                            <li><i class="far fa-check-circle"></i>Vinyl Wraps Service</li>
                            <li>
                                <i class="far fa-check-circle"></i>Tinting &
                                Tow Hitches Service
                            </li>


                            <li>
                                <i class="far fa-check-circle"></i>Tires Service
                            </li>

                            <li>
                                <i class="far fa-check-circle"></i>Windshied Repairs & Auto Body Repair Service
                            </li>
                        </ul> --}}
                        <a class="btn btn-custom" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>Premium Services</h2>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item">
                            @if($service->image)
                                <img src="{{ asset('public/admin/images/services') }}/{{ $service->image }}" alt="Slider Image" height="200px" width="500px">
                            @else 
                                <img src="{{ asset('public/admin/images/services/no-photo1.jpg') }}" alt="Slider Image" height="200px" width="500px">
                            @endif

                            <h3 class="py-3">{{ $service->name }}</h3>
                            <p class="pb-3">
                                {!! \Illuminate\Support\Str::limit($service->description,100) !!}
                            </p>
                            <div>
                                <a class="btn btn-custom" href="{{ route('services') }}">See More..</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="{{ asset('public/web/img/facts.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">{{ $home_page_data['home_counter_points_counter'] }}</h3>
                            <p>{{ $home_page_data['home_counter_points_label'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-user"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">{{ $home_page_data['home_counter_members_counter'] }}</h3>
                            <p>{{ $home_page_data['home_counter_members_label'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-users"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">{{ $home_page_data['home_counter_clients_counter'] }}</h3>
                            <p>{{ $home_page_data['home_counter_clients_label'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-check"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">{{ $home_page_data['home_counter_projects_counter'] }}</h3>
                            <p>{{ $home_page_data['home_counter_projects_label'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Location Start -->
    <div class="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-header text-left">
                        <p>Care Points</p>
                        <h2>We Are Here to Serve You</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>CALGARY AUTO CARE</h3>
                                    <p>{!! $home_page_data['footer_address'] !!}</p>
                                    <p><strong>Call:</strong>{!! $home_page_data['footer_phone'] !!}</p>
                                    <p><strong>Email:</strong>{!! $home_page_data['footer_email'] !!}</p>
                                    <p><strong>Website:</strong>{!! $home_page_data['contact_website'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="location-form">
                        <h3>Request for a car service</h3>
                        <form class="form" method="post" action="{{ route('booking.store') }}">
                            @csrf

                            <div class="control-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                <span style="color: red">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="control-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
                                <span style="color: red">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" name="description" placeholder="Description" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">
                                    Send Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location End -->

    <!-- services we provides Start -->
    <div class="services_provided">
        <div class="container">
            <div class="section-header text-center">
                <p>Services</p>
                <h2>Services We Provide</h2>
            </div>
            <div class="row check_circle">
                <div class="col-lg-4">
                    <ul>
                        @foreach ($services as $service)
                            <li><i class="far fa-check-circle"></i>{{ $service->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Location End -->

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Meet Our Team</p>
                <h2>Our Engineers & Workers</h2>
            </div>
            <div class="row">
                @foreach ($team_members as $member)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                @if($member->image)
                                    <img src="{{ asset('public/admin/assets/images/team') }}/{{ $member->image }}" alt="Slider Image" height="200px" width="500px">
                                @else 
                                    <img src="{{ asset('public/admin/assets/images/team/no-photo1.jpg') }}" alt="Slider Image" height="200px" width="500px">
                                @endif
                            </div>
                            <div class="team-text">
                                <h2>{{ $member->first_name }} {{ $member->last_name }}</h2>
                                <p>{{ $member->designation }}</p>
                                <div class="team-social">
                                    <a href="{{ $member->twitter_link }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $member->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $member->linkedin_link }}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{ $member->instagram_link }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Testimonial</p>
                <h2>What our clients say</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                @foreach ($testimonials as $testimonail)
                    <div class="testimonial-item">
                        @if($testimonail->image)
                            <img src="{{ asset('public/admin/assets/images/testimonials') }}/{{ $testimonail->image }}" alt="Slider Image" height="200px" width="500px">
                        @else 
                            <img src="{{ asset('public/admin/assets/images/testimonials/no-photo1.jpg') }}" alt="Slider Image" height="200px" width="500px">
                        @endif
                        <div class="testimonial-text">
                            <h3>{{ $testimonail->name }}</h3>
                            <h4>{{ $testimonail->designation }}</h4>
                            {!! $testimonail->comment !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

@push('js')
@endpush