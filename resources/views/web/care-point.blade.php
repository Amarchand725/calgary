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
                    <h2>Service Care Points</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Location</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Location Start -->
    <div class="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-header text-left">
                        <p>Care Points</p>
                        <h2>Car Service & Care Points</h2>
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
                        <h3>Request for a car Service</h3>
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
@endsection

@push('js')
@endpush