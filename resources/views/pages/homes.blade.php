@extends('layouts.landing')

@section('title', 'Derrique homes and Travels')

@section('content')
<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/favicon.JPG')}}" alt="Derrick Homes and Travels">
            <!-- <h1>Derrick Homes and Travels<span>.</span></h1> -->
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="nav-item"><a href="index.html/#hero">Home</a></li>
                <li class="nav-item"><a href="{{ route('cars') }}">Cars</a></li>
                <li class="nav-item"><a href="{{ route('homes') }}">Homes</a></li>
                <li class="nav-item"><a href="index.html/#about">About</a></li>
                <li class="nav-item"><a href="index.html/#contact">Contact Us</a></li>

            </ul>
        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
<!-- End Header -->
<!-- =======Cars Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">5 Bedroom</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/12.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/5bdrms/12.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="homes/5bdrms/11.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/5bdrms/11.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/5bdrms/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/2.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrms/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrms/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/6.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrms/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/8.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrms/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/9.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrms/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrms/7.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrms/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4><a href="portfolio-details.html" title="More Details">Nakuru, Lanet</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 17,000/day</h6>
                <button class="btn-order" data-title="5 Bedrooms" data-description="Nakuru Lanet" data-image="{{ asset('homes/5bdrms/12.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======5 bedroom naka Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">5 Bedroom Naka</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/23.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/23.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/21.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/21.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/7.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/15.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/15.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/14.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/14.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/12.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/12.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/13.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/13.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/11.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/11.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/10.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/10.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/9.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/5bdrmnaka/8.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/5bdrmnaka/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Naka, Nakuru</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 17,000/day</h6>
                <button class="btn-order" data-title="5 bedroom" data-description="Naka Nakuru" data-image="{{ asset('homes/5bdrmnaka/3.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->




<!-- =======4bdrm naka Portfolio Section ======= -->
<section id="homes" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">4 Bedrooms</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/sunnyside/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/sunnyside/2.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/sunnyside/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/4.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/sunnyside/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/sunnyside/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/6.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/sunnyside/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/8.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('/homes/sunnyside/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/sunnyside/9.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/sunnyside/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru, Lanet</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 15,000/day</h6>
                <button class="btn-order" data-title="5 Bedrooms" data-description="Nakuru Lanet" data-image="{{ asset('homes/5bdrms/12.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->





<!-- =======2 bedrooms Yellow Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">2 Bedrooms</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdredish/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/7.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdredish/7.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/8.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdredish/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/6.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdredish/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdredish/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/2.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdredish/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/3.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdredish/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdredish/4.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdredish/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru, Naka</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 5,500/day</h6>
                <button class="btn-order" data-title="2 Bedrooms" data-description="Nakuru Naka" data-image="{{ asset('homes/2bdredish/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->




<!-- =======2 bedrooms Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">2 Bedrooms</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/6.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdyellow/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdyellow/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/8.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdyellow/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/2.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdyellow/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/1.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdyellow/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdyellow/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/7.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdyellow/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdyellow/9.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdyellow/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru, Naka</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 5,500/day</h6>
                <button class="btn-order" data-title="2 Bedrooms" data-description="Nakuru Naka" data-image="{{ asset('homes/2bdyellow/6.jpg')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======2 bedroom Oyugis Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">2 Bedroom Oyugis</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/8.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/7.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/7.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/3.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/11.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/11.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/12.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/12.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/10.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/10.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmoyugis/9.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmoyugis/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Oyugis Town, Homa Bay</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 7,000/day</h6>
                <button class="btn-order" data-title="2 bedroom" data-description="Oyugis Town" data-image="{{ asset('homes/2bdrmoyugis/8.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======2 bedroom Migori Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">2 Bedroom Migori</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmmigori/8.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdrmmigori/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmmigori/7.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdrmmigori/7.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmmigori/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/2bdrmmigori/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmmigori/3.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmmigori/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmmigori/2.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmmigori/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/2bdrmmigori/1.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/2bdrmmigori/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Migori Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 6,000/day</h6>
                <button class="btn-order" data-title="2 bedroom" data-description="Migori Town" data-image="{{ asset('homes/2bdrmmigori/8.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->





<!-- =======1 bedroom Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">1 Bedroom</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/1bd/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/5.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/1bd/5.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/1bd/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/6.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bd/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/1.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bd/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/7.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bd/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bd/4.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bd/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 3,000/day</h6>
                <button class="btn-order" data-title="1 bedroom" data-description="Nakuru Town" data-image="{{ asset('homes/1bd/4.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======1 bedroom Migori Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">1 Bedroom Migori</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bdmigori/9.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="./homes/1bdmigori/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bdmigori/8.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="./homes/1bdmigori/8.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bdmigori/7.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/1bdmigori/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bdmigori/3.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bdmigori/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bdmigori/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bdmigori/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/1bdmigori/4.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/1bdmigori/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Migori Town, Homa Bay</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 3,500/day</h6>
                <button class="btn-order" data-title="1 bedroom" data-description="Migori Town" data-image="{{ asset('homes/1bdmigori/8.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->





<!-- =======Studio Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Studio Apartment</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studioblue/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studioblue/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studioblue/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studioblue/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studioblue/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studioblue/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studioblue/2.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/studioblue/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 2,500/day</h6>
                <button class="btn-order" data-title="Studio" data-description="Nakuru Town" data-image="{{ asset('homes/studioblue/1.jpg')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->




<!-- =======Studio Grey Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Studio Apartment</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiogrey/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studiogrey/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiogrey/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studiogrey/4.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiogrey/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studiogrey/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiogrey/3.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/studiogrey/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiogrey/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/studiogrey/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 2,500/day</h6>
                <button class="btn-order" data-title="Studio" data-description="Nakuru Town" data-image="{{ asset('homes/studiogrey/4.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======Studio White Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Studio Apartment</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

            <div>
                <ul class="portfolio-flters">
                    <!-- <li data-filter="*" class="filter-active">All</li> -->
                    <!-- <li data-filter=".filter-offroad">offroad</li> -->
                    <!-- <button class="btn-order" data-title="Toyota landcruiser" data-description="Toyota landcruiser Black" data-image="assets/img/portfolio/VDYE0947.jpg">Book Now</button>       -->

                </ul><!-- End Portfolio Filters -->
            </div>
            <div class="portfolio-info">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiowhite/6.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studiowhite/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiowhite/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studiowhite/2.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiowhite/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('homes/studiowhite/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiowhite/3.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/studiowhite/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('homes/studiowhite/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('homes/studiowhite/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 2,500/day</h6>
                <button class="btn-order" data-title="Studio" data-description="Nakuru Town" data-image="https://192.168.0.101:5500/homes/studiowhite/6.JPG">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

@section('content')