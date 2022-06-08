<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">CALGARY</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">Service</a>
                    <a href="{{ route('prices') }}" class="nav-item nav-link {{ request()->is('prices') ? 'active' : '' }}">Price</a>
                    <a href="{{ route('care-points') }}" class="nav-item nav-link {{ request()->is('care-points') ? 'active' : '' }}">Care Points</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="ml-auto">
                    <!-- <a class="btn btn-custom" href="#">Get Appointment</a> -->
                    <button class="btn btn-custom" id="btnLogin" data-toggle="modal" data-target="#loginModal">
                        Get Appointment
                        <div class="ripple-container"></div>
                    </button>

                    <div class="modal fade show" id="loginModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-login mt-5" role="document">
                            <div class="modal-content">
                                <div class="card card-signup card-plain">
                                    <div class="modal-header">
                                        <div class="card-header card-header-primary text-center">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true"><i class="material-icons">clear</i></button>
                                            <h4 class="card-title"> Appointment</h4>
                                        </div>
                                    </div>
                                    <form class="form" method="post" action="{{ route('booking.store') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="form-group bmd-form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">person</i>
                                                            </span>
                                                        </div>
                                                        <input type="text" name="name" class="form-control" placeholder="First Name...">
                                                    </div>
                                                </div>

                                                <div class="form-group bmd-form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">mail</i>
                                                            </span>
                                                        </div>
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="Email...">
                                                    </div>
                                                </div>

                                                <div class="form-group bmd-form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">home_repair_service</i>
                                                            </span>
                                                        </div>
                                                        @php $services = App\Models\Service::orderby('id', 'desc')->where('status', 1)->get(); @endphp 
                                                        <select id="inputState" name="service_id" class="form-control">
                                                            <option value="" selected>Select Services</option>
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group bmd-form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">schedule</i>
                                                            </span>
                                                        </div>
                                                        <input type="datetime-local" name="date_time" class="form-control" placeholder="Email...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center px-3">
                                            <button type="submit" class="btn btn-custom bg-dark text-white">Confirm</button>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>