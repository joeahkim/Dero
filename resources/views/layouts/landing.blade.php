<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Derrick Homes and Travels</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- Favicon -->
    <link href="{{ asset('asset1/img/favicon.JPG') }}" rel="icon">
    <link href="{{ asset('asset1/img/favicon.JPG') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('asset1/css/main.css') }}" rel="stylesheet">


</head>

<body>

    <main class="main" id="main">
        @yield('content')
    </main>



    @include('landing-partials.footer')
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const whatsappBtns = document.querySelectorAll('.btn-order');

            whatsappBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const phoneNumber = '254790179020';
                    const title = encodeURIComponent(btn.getAttribute('data-title'));
                    const description = encodeURIComponent(btn.getAttribute('data-description'));
                    const image = encodeURIComponent(btn.getAttribute('data-image'));
                    const message = `I want to book ${title}%0A${description}%0A${image}`;

                    const whatsappUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${message}`;
                    window.open(whatsappUrl, '_blank');
                });
            });
        });
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('asset1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset1/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('asset1/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('asset1/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('asset1/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('asset1/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('asset1/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('asset1/js/main.js') }}"></script>

</body>

</html>