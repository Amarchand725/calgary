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
                    <h2>Service</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Service</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>AUTO REPAIR SERVICES</h2>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            @if($service->image)
                                <img src="{{ asset('public/admin/images/services') }}/{{ $service->image }}" alt="Slider Image" height="200px" width="300px">
                            @else 
                                <img src="{{ asset('public/admin/images/services/no-photo1.jpg') }}" alt="Slider Image" height="200px" width="500px">
                            @endif

                            <h3 class="py-3">{{ $service->name }}</h3>
                            <p class="pb-3">
                                {!! \Illuminate\Support\Str::limit($service->description,100) !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection

@push('js')
@endpush