@extends('layouts.frontend.app')
@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Hero Start -->
    <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">Service</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-primary" href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="font-dancing-script text-primary">Our Services</h1>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 g-md-0 text-center">
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/haircut.png" alt="">
                        <h3 class="mb-3">Haircut</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-end wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid" src="img/makeup.png" alt="">
                        <h3 class="mb-3">Makeup</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-end border-lg-end-0 wow fadeIn"
                        data-wow-delay="0.5s">
                        <img class="img-fluid" src="img/manicure.png" alt="">
                        <h3 class="mb-3">Manicure</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase my-2" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-bottom border-lg-bottom-0 border-lg-end wow fadeIn"
                        data-wow-delay="0.1s">
                        <img class="img-fluid" src="img/pedicure.png" alt="">
                        <h3 class="mb-3">Pedicure</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 border-end wow fadeIn" data-wow-delay="0.3s">
                        <img class="img-fluid" src="img/massage.png" alt="">
                        <h3 class="mb-3">Massage</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-item h-100 p-4 wow fadeIn" data-wow-delay="0.5s">
                        <img class="img-fluid" src="img/skin-care.png" alt="">
                        <h3 class="mb-3">Skin Care</h3>
                        <p class="mb-3">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo
                            et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-sm btn-primary text-uppercase" href="">Read More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script text-primary">Testimonial</h1>
                <h1 class="mb-5">What Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="img/testimonial-1.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="img/testimonial-2.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="img/testimonial-3.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
                <div class="text-center bg-light p-4">
                    <i class="fa fa-quote-left fa-3x mb-3"></i>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat
                        ipsum et lorem et sit.</p>
                    <img class="img-fluid mx-auto border p-1 mb-3" src="img/testimonial-4.jpg" alt="">
                    <h4 class="mb-1">Client Name</h4>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
@endsection
