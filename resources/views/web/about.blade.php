@extends('layouts.web.app')
@section('title', 'title')

@push('css')
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/img-about-company-desc.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>
                            Delivering Professional Auto Repairs Since 1999</h2>
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
@endsection

@push('js')
@endpush