@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/tires-1.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Your Trusted Auto Repair Shop in Calgary</h1>

                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>
                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/AutoRepair.png') }}" alt="Image" class="img-fluid" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Auto Repair  services</h1>
                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/tyre-services.jpg') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Tire services</h1>
                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/Alloy-Wheels.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Alloy Wheels services</h1>
                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/Auto-Detailing.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Auto Detailing Services</h1>
                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/Tinting.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Tinting Wrap & Paint Protection Service<br>
                        </h1>
                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/tow-hitches.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Tow Hitches Service
                        </h1>
                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/Windshied-Repairs.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Windshied Repairs services</h1>

                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/Body-Repair.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Auto Body Repair <br> services</h1>

                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="">Request Service</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('public/web/img/truck.png') }}" alt="Image" />
                    </div>
                    <div class="carousel-text">
                        <h3>Calgary services</h3>
                        <h1>Truck, Motor Home & <br> RV Repair services</h1>

                        <p>Convenient, Reliable Auto Repair and Service in Calgary</p>

                        <a class="btn btn-custom" href="#">Request Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('public/web/img/img-about-company-desc.jpg') }}" alt="Image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>Reliable Auto Repair and Service in Calgary</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Lorem ipsum dolor sit amet elit. In vitae turpis. Donec in hendre dui, vel blandit massa. Ut
                            vestibu suscipi cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget
                            velit luctus dictum
                        </p>
                        <ul>
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
                        </ul>
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
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('public/web/img/service.jpg') }}" alt="Image" class="img-fluid" />

                        <h3 class="py-3">Brake Repair and Service</h3>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor
                        </p>
                        <div>
                            <a class="btn btn-custom" href="#">See More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('public/web/img/image-repair.jpg') }}" alt="Image" class="img-fluid" />

                        <h3 class="py-3">Emergency Repairs</h3>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor
                        </p>
                        <div>
                            <a class="btn btn-custom" href="#">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('public/web/img/oil-change.jpg') }}" alt="Image" class="img-fluid" />

                        <h3 class="py-3">Oil Change and Lube</h3>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor
                        </p>
                        <div>
                            <a class="btn btn-custom" href="#">See More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('public/web/img/performance.jpg') }}" alt="Image" class="img-fluid" />

                        <h3 class="py-3">Out of Province Inspections</h3>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor
                        </p>
                        <div>
                            <a class="btn btn-custom" href="#">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('public/web/img/scheduled.jpg') }}" alt="Image" class="img-fluid" />

                        <h3 class="py-3">Scheduled Maintenance</h3>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor
                        </p>
                        <div>
                            <a class="btn btn-custom" href="#">See More..</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <img src="{{ asset('public/web/img/transmission.jpg') }}" alt="Image" class="img-fluid" />

                        <h3 class="py-3">Transmission Repair and Service</h3>
                        <p class="pb-3">
                            Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor
                        </p>
                        <div>
                            <a class="btn btn-custom" href="#">See More..</a>
                        </div>
                    </div>
                </div>
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
                            <h3 data-toggle="counter-up">25</h3>
                            <p>Service Points</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-user"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">350</h3>
                            <p>Engineers & Workers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-users"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">1500</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-check"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">5000</h3>
                            <p>Projects Completed</p>
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
                                    <p>150 Nolanridge Cres NW Calgary, AB T3r 1W9, Canada.</p>
                                    <p><strong>Call:</strong>6474004865</p>
                                    <p><strong>Email:</strong>Calgaryautocare1@gmail.com</p>
                                    <p><strong>Website:</strong>Calgaryautocare.com</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="location-form">
                        <h3>Request for a car service</h3>
                        <form>
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" required="required" />
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" placeholder="Description" required="required"></textarea>
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
                        <li><i class="far fa-check-circle"></i>Auto Repair services</li>
                        <li><i class="far fa-check-circle"></i>Tires services</li>
                        <li><i class="far fa-check-circle"></i>Alloy Wheels services</li>
                        <li><i class="far fa-check-circle"></i>Auto Detailing Services</li>
                        <li>
                            <i class="far fa-check-circle"></i>Tinting
                            services
                        </li>
                        <li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Tow Hitches services
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>Windshied Repairs services
                        </li>
                        <li><i class="far fa-check-circle"></i>Auto Body Repair services</li>
                        <li><i class="far fa-check-circle"></i>Truck , Motor home & RV services</li>
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
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('public/web/img/team-1.jpg') }}" alt="Team Image" />
                        </div>
                        <div class="team-text">
                            <h2>Donald John</h2>
                            <p>Engineer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('public/web/img/team-2.jpg') }}" alt="Team Image" />
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Engineer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('public/web/img/team-3.jpg') }}" alt="Team Image" />
                        </div>
                        <div class="team-text">
                            <h2>Thomas Olsen</h2>
                            <p>Worker</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('public/web/img/team-4.jpg') }}" alt="Team Image" />
                        </div>
                        <div class="team-text">
                            <h2>James Alien</h2>
                            <p>Worker</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="testimonial-item">
                    <img src="{{ asset('public/web/img/testimonial-1.jpg') }}" alt="Image" />
                    <div class="testimonial-text">
                        <h3>Client Name</h3>
                        <h4>Profession</h4>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor auctor gravid
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="{{ asset('public/web/img/testimonial-2.jpg') }}" alt="Image" />
                    <div class="testimonial-text">
                        <h3>Client Name</h3>
                        <h4>Profession</h4>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor auctor gravid
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="{{ asset('public/web/img/testimonial-3.jpg') }}" alt="Image" />
                    <div class="testimonial-text">
                        <h3>Client Name</h3>
                        <h4>Profession</h4>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor auctor gravid
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="{{ asset('public/web/img/testimonial-4.jpg') }}" alt="Image" />
                    <div class="testimonial-text">
                        <h3>Client Name</h3>
                        <h4>Profession</h4>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu
                            metus tortor auctor gravid
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

@push('js')
@endpush