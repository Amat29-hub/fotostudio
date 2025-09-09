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
    <div class="container-fluid p-0 hero-header bg-light mb-5">
        <div class="container p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 hero-header-text py-5">
                    <div class="py-5 px-3 ps-lg-0">
                        <h1 class="font-dancing-script animated slideInLeft" style="color:#008080;">Welcome</h1>
                        <h1 class="display-1 mb-4 animated slideInLeft">Fotografi Kenangan Vintage</h1>
                        <div class="row g-4 animated slideInLeft">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel header-carousel animated fadeIn">
                        <img class="img-fluid" src="img/hero-slider-1.jpg" alt="">
                        <img class="img-fluid" src="img/hero-slider-2.jpg" alt="">
                        <img class="img-fluid" src="img/hero-slider-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <img class="img-fluid mb-3" src="img/about.jpg" alt="">
                    <div class="d-flex align-items-center bg-light">
                        <div class="btn-square flex-shrink-0" style="width: 100px; height: 100px; background-color:#008080;">

                            <i class="fa fa-phone fa-2x text-dark"></i>
                        </div>
                        <div class="px-3">
                            <h3>+0123456789</h3>
                            <span>Call us direct 24/7 for get a free consultation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="font-dancing-script" style="color:#008080;">About Us</h1>
                    <h1 class="mb-5">Why People Choose Us!</h1>
                    <p class="mb-4">Kebersamaan selalu lebih indah saat di abadikan
                        dengan sentuhan fotografi grup yang hangat
                        kami membantu anda menyimpan momen
                        berharga bersama teman, sahabat, atau keluarga
                        besar dalam satu potret penuh cerita
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="font-dancing-script" style="color:#008080;">Our Services</h1>
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




    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Gallery</h1>
                <h1 class="mb-5">Explore Our Gallery</h1>
            </div>
            <div class="row g-0">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item h-100">
                        <img src="img/gallery-1.jpg" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="img/gallery-1.jpg" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-1"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item h-100">
                        <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="img/gallery-2.jpg" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-2"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item h-100">
                        <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="img/gallery-3.jpg" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-3"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.2s">
                    <div class="gallery-item h-100">
                        <img src="img/gallery-4.jpg" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="img/gallery-4.jpg" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-4"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.4s">
                    <div class="gallery-item h-100">
                        <img src="img/gallery-5.jpg" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="img/gallery-5.jpg" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-5"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="gallery-item h-100">
                        <img src="img/gallery-6.jpg" class="img-fluid w-100 h-100" alt="">
                        <div class="gallery-icon">
                            <a href="img/gallery-6.jpg" class="btn btn-primary btn-lg-square"
                                data-lightbox="Gallery-6"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


 <!-- Team Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Team Members</h1>
                <h1 class="mb-5">Our Experienced Specialists</h1>
            </div>
            <div class="row g-4 team justify-content-center">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Hair Specialist</p>
                            <h4>Lily Taylor</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Nail Designer</p>
                            <h4>Olivia Smith</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Beauty Specialist</p>
                            <h4>Ava Brown</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


 <!-- Partner Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Partners</h1>
                <h1 class="mb-5">Our Partner</h1>
            </div>
            <div class="row g-4 team justify-content-center">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Nail Designer</p>
                            <h4>Olivia Smith</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Beauty Specialist</p>
                            <h4>Ava Brown</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <p class="text-primary mb-1">Spa Specialist</p>
                            <h4>Amelia Jones</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2 me-3" href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-dark btn-sm-square border-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Testimonial</h1>
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
