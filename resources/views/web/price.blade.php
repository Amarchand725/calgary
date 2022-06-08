@extends('layouts.web.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2> Service Plan</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Price</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Price Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>VIEW PRICING FOR ADDITIONAL CAR REPAIR SERVICE PACKAGES
                </p>
                <h2>Choose Your Plan</h2>
            </div>
            <div class="row">
                @foreach ($packages as $package)
                    <div class="col-md-4">
                        <div class="price-item @if($package->is_featured==1) featured-item @endif">
                            <div class="price-header">
                                <h3>{{ $package->name }}</h3>
                                @php $prices = explode('.', $package->price); @endphp 
                                <h2><span>{!! $home_page_data['header_currency_symbol'] !!}</span><strong>{{ $prices[0] }}</strong><span>.{{ $prices[1] }}</span></h2>
                            </div>
                            <div class="price-body">
                                {!! $package->description !!}
                                {{-- <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul> --}}
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-md-4">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <h3>Premium Cleaning</h3>
                            <h2><span>$</span><strong>35</strong><span>.99</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-times-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Complex Cleaning</h3>
                            <h2><span>$</span><strong>49</strong><span>.99</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                <li><i class="far fa-check-circle"></i>Window Wiping</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <a class="btn btn-custom" href="">Book Now</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Price End -->
@endsection

@push('js')
@endpush