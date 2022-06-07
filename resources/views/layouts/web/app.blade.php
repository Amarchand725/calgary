<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free Website Template" name="keywords" />
    <meta content="Free Website Template" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('public/web/img/fav.png') }}" rel="icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('public/web/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/web/lib/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/web/lib/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/web/lib/owlcarousel/assets/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/summernote.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/web/css/style.css') }}" />

    <!-- modal links -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    @stack('css')
</head>

<body>
    <!-- Top Bar Start -->
    @include('layouts.web.header')
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    @include('layouts.web.nav-bar')
    <!-- Nav Bar End -->

    @yield('content')

    <!-- Footer Start -->
    @include('layouts.web.footer')
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('public/web/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('public/web/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('public/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('public/web/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('public/web/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/web/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/web/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('public/js/summernote.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{ asset('public/js/toastr.min.js') }}"></script>
	<script src="{{ asset('public/js/search.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('public/web/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('public/web/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('public/web/js/main.js') }}"></script>

    @stack('js')

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
		@if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.success("{{ session('message') }}");
		@endif

		@if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.error("{{ session('error') }}");
		@endif

		@if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.info("{{ session('info') }}");
		@endif

		@if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
			toastr.warning("{{ session('warning') }}");
		@endif

		$(document).on("input", ".numeric", function() {
			this.value = this.value.replace(/\D/g,'');
		});
	</script>
</body>

</html