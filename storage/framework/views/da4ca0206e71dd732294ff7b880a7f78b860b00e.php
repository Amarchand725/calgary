<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">CALGARY</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link">About</a>
                    <a href="<?php echo e(route('services')); ?>" class="nav-item nav-link">Service</a>
                    <a href="<?php echo e(route('prices')); ?>" class="nav-item nav-link">Price</a>
                    <a href="<?php echo e(route('care-points')); ?>" class="nav-item nav-link">Care Points</a>
                    <a href="<?php echo e(route('contact')); ?>" class="nav-item nav-link">Contact</a>
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
                                    <div class="modal-body">
                                        <form class="form" method="" action="">

                                            <div class="card-body">

                                                <div class="form-group bmd-form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">person</i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="First Name...">
                                                    </div>
                                                </div>

                                                <div class="form-group bmd-form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">mail</i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control"
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
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Select Services</option>
                                                            <option>Auto Repair</option>
                                                            <option>Tires</option>
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
                                                        <input type="datetime-local" class="form-control" placeholder="Email...">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-center px-3">
                                        <a href="#pablo" class="btn btn-custom bg-dark text-white">Confirm </a>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Calgary\resources\views/layouts/web/nav-bar.blade.php ENDPATH**/ ?>