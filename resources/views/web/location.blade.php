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
                        <h3>Request for a car Service</h3>
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
@endsection

@push('js')
@endpush