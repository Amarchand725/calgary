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
                <h2>Contact Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Contact</a>
            </div>
        </div>
    </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Get In Touch</p>
                <h2>Contact for any query</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h2>Quick Contact Info</h2>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Location</h3>
                                <p>{!! $home_page_data['footer_address'] !!}</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Call Us</h3>
                                <p>{!! $home_page_data['footer_phone'] !!}</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Email Us</h3>
                                <p>{!! $home_page_data['footer_email'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <iframe src="{!! $home_page_data['contact_map'] !!}"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@push('js')
@endpush