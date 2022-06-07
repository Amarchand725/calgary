<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free Website Template" name="keywords" />
    <meta content="Free Website Template" name="description" />

    <!-- Favicon -->
    <link href="<?php echo e(asset('public/web/img/fav.png')); ?>" rel="icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('public/web/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('public/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/web/lib/flaticon/font/flaticon.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/web/lib/animate/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/web/lib/owlcarousel/assets/owl.carousel.min.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/toastr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/summernote.css')); ?>">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('public/web/css/style.css')); ?>" />

    <!-- modal links -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?php echo $__env->make('layouts.web.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <?php echo $__env->make('layouts.web.nav-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Nav Bar End -->

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Start -->
    <?php echo $__env->make('layouts.web.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="<?php echo e(asset('public/web/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/web/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/web/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/web/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/web/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/web/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/summernote.js')); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="<?php echo e(asset('public/js/toastr.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/js/search.js')); ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo e(asset('public/web/mail/jqBootstrapValidation.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/web/mail/contact.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('public/web/js/main.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('js'); ?>

    <!-- modal script -->
    <script>
        $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
            document.getElementById("btnLogin").click();
            setTimeout(function () {
                document.getElementById("btnLogin").click();
            }, 2000);

        });
    </script>
    <script>
		<?php if(Session::has('message')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.success("<?php echo e(session('message')); ?>");
		<?php endif; ?>

		<?php if(Session::has('error')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.error("<?php echo e(session('error')); ?>");
		<?php endif; ?>

		<?php if(Session::has('info')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.info("<?php echo e(session('info')); ?>");
		<?php endif; ?>

		<?php if(Session::has('warning')): ?>
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.warning("<?php echo e(session('warning')); ?>");
		<?php endif; ?>

		$(document).on("input", ".numeric", function() {
			this.value = this.value.replace(/\D/g,'');
		});
	</script>
</body>

</html<?php /**PATH C:\xampp\htdocs\Calgary\resources\views/layouts/web/app.blade.php ENDPATH**/ ?>