@extends('layouts.landing')

@section('title', 'Derrique homes and Travels')

@section('content')

<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/favicon.jpg') }}" alt="Derrick Homes and Travels">
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
<!-- =======toyota harrier Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Toyota Harrier</h2>
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
                            <a href="{{ asset('cars/toyotaharrier/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaharrier/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaharrier/2.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaharrier/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/4.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('cars/toyotaharrier/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/5.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('cars/toyotaharrier/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/6.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('cars/toyotaharrier/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/7.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('cars/toyotaharrier/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/8.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('cars/toyotaharrier/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-small">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaharrier/9.JPG')}}" data-gallery="portfolio-gallery-small" class="glightbox"><img src="{{ asset('cars/toyotaharrier/9.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 8,000/day</h6>
                <button class="btn-order" data-title="Studio" data-description="Nakuru Town" data-image="{{ asset('cars/toyotaharrier/9.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======Toyota Prado Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Landcruiser Prado</h2>
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
                            <a href="{{ asset('cars/toyotaprado/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaprado/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaprado/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaprado/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaprado/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaprado/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 15,000/day</h6>
                <button class="btn-order" data-title="Toyota Prado" data-description="Nakuru Town" data-image="{{ asset('cars/toyotaprado/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- =======Toyota Landcruiser Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Landcruiser V8</h2>
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
                            <a href="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG" data-gallery="portfolio-gallery-offroad')}}" class="glightbox"><img src="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->



                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 22,000/day</h6>
                <button class="btn-order" data-title="Toyota Landcruiser" data-description="Nakuru Town" data-image="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Mazda CX-5 Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Mazda CX-5</h2>
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
                            <a href="{{ asset('cars/mazdacx5/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdacx5/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdacx5/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdacx5/2.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdacx5/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdacx5/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdacx5/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdacx5/4.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdacx5/5.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdacx5/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->


                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdacx5/6.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdacx5/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 7,000/day</h6>
                <button class="btn-order" data-title="Toyota Landcruiser" data-description="Nakuru Town" data-image="{{ asset('cars/toyotalandcruiser/VDYE0947.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Mazda Demio Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Mazda Demio</h2>
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
                            <a href="{{ asset('cars/mazdademio/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdademio/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdademio/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdademio/2.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/mazdademio/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/mazdademio/3.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <p>Automatic</p>
                <h6>Ksh 3,500/day</h6>
                <button class="btn-order" data-title="Mazda Demio" data-description="Nakuru Town" data-image="{{ asset('cars/mazdademio/5.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Nissan 14 seater Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan 14 Seater</h2>
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
                            <a href="{{ asset('cars/nissanvan/nissanvan1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissanvan/nissanvan1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissanvan/NissanVan.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissanvan/NissanVan.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissanvan/Nissanvan2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissanvan/Nissanvan2.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 7,500/day</h6>
                <button class="btn-order" data-title="Nissan Van" data-description="Nakuru Town" data-image="{{ asset('cars/nissanvan/nissanvan1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Nissan Serena seater Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan Serena</h2>
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
                            <a href="{{ asset('cars/Nissanserena/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/Nissanserena/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/Nissanserena/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/Nissanserena/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/Nissanserena/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/Nissanserena/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 6,500/day</h6>
                <button class="btn-order" data-title="Nissan Serena" data-description="Nakuru Town" data-image="{{ asset('cars/Nissanserena/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======Nissan Xtrail seater Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan X-Trail</h2>
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
                            <a href="{{ asset('cars/nissanxtrail/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissanxtrail/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissanxtrail/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissanxtrail/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissanxtrail/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissanxtrail/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 7,000/day</h6>
                <button class="btn-order" data-title="Nissan X-Trail" data-description="Nakuru Town" data-image="{{ asset('cars/nissanxtrail/1.JPG')}}">Book Now</button>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======Nissan sylphy Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan Sylphy</h2>
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
                            <a href="{{ asset('cars/nissansylphy/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissansylphy/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissansylphy/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissansylphy/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissansylphy/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissansylphy/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 4,000/day</h6>
                <button class="btn-order" data-title="Nissan Sylphy" data-description="Nakuru Town" data-image="{{ asset('cars/nissansylphy/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->


<!-- =======Nissan note white Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan Note</h2>
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
                            <a href="{{ asset('cars/nissannote/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissannote/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissannote/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 3,500/day</h6>
                <button class="btn-order" data-title="Nissan Note White" data-description="Nakuru Town" data-image="{{ asset('cars/nissannote/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->




<!-- =======Nissan note Black Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan Note</h2>
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
                            <a href="{{ asset('cars/nissannote/6.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/6.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissannote/5.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/5.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissannote/4.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/4.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 3,500/day</h6>
                <button class="btn-order" data-title="Nissan Note Black" data-description="Nakuru Town" data-image="{{ asset('cars/nissannote/5.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->






<!-- =======Nissan note Grey Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Nissan Note</h2>
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
                            <a href="{{ asset('cars/nissannote/7.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/7.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissannote/8.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/8.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/nissannote/9.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/nissannote/9.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 3,500/day</h6>
                <button class="btn-order" data-title="Nissan Note Grey" data-description="Nakuru Town" data-image="{{ asset('cars/nissannote/7.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Toyota AlphardPortfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Toyota Alphard</h2>
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
                            <a href="{{ asset('cars/toyotaalphard/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaalphard/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaalphard/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaalphard/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaalphard/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaalphard/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 7,500/day</h6>
                <button class="btn-order" data-title="Toyota Alphard" data-description="Nakuru Town" data-image="{{ asset('cars/toyotaalphard/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Toyota Axio Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Toyota Axio</h2>
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
                            <a href="{{ asset('cars/toyotaaxio/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaaxio/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaaxio/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaaxio/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotaaxio/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotaaxio/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 4,000/day</h6>
                <button class="btn-order" data-title="Toyota Axio" data-description="Nakuru Town" data-image="{{ asset('cars/toyotaaxio/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->




<!-- =======Toyota Fielder Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Toyota Fielder</h2>
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
                            <a href="{{ asset('cars/toyotafielder/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotafielder/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotafielder/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotafielder/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotafielder/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotafielder/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 4,000/day</h6>
                <button class="btn-order" data-title="Toyota Fielder" data-description="Nakuru Town" data-image="{{ asset('cars/toyotafielder/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->



<!-- =======Toyota Vitz Portfolio Section ======= -->
<section id="cars" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2 class="text-start pb-2 border-bottom">Toyota Vitz</h2>
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
                            <a href="{{ asset('cars/toyotavitz/1.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotavitz/1.JPG')}}" class="img-fluid" alt=""></a>

                        </div>


                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotavitz/2.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotavitz/2.JPG')}}" class="img-fluid" alt=""></a>

                        </div>
                    </div><!-- End Portfolio Item -->
                    <div class="col-xl-4 col-md-6 portfolio-item filter-offroad">
                        <div class="portfolio-wrap">
                            <a href="{{ asset('cars/toyotavitz/3.JPG')}}" data-gallery="portfolio-gallery-offroad" class="glightbox"><img src="{{ asset('cars/toyotavitz/3.JPG')}}" class="img-fluid" alt=""></a>
                        </div>
                    </div><!-- End Portfolio Item -->




                </div><!-- End Portfolio Container -->
                <h4 class="pt-3"><a href="portfolio-details.html" title="More Details">Nakuru Town</a></h4>
                <!-- <p>Automatic</p> -->
                <h6>Ksh 3,500/day</h6>
                <button class="btn-order" data-title="Toyota Vitz" data-description="Nakuru Town" data-image="{{ asset('cars/toyotavitz/1.JPG')}}">Book Now</button>

            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->




@section('content')