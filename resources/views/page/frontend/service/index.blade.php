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
         <h1 class="font-dancing-script" style="color:#008080;">Our Services</h1>
         <h1 class="mb-5">Explore Our Services</h1>
       </div>

       <div class="row g-0 text-center">

         <!-- Service Item -->
         <div class="col-md-6 col-lg-4">
           <div class="p-4 border-end border-bottom">
             <img class="img-fluid mb-3" src="img/selfphoto.jpg" alt="SelfPhoto">
             <h5>SelfPhoto</h5>
             <p>Lorem, deren, trataro, filede, nerada</p>
             <h5 class="text-danger fw-bold">$12.95</h5>
           </div>
         </div>

         <!-- Service Item -->
         <div class="col-md-6 col-lg-4">
           <div class="p-4 border-end border-bottom">
             <img class="img-fluid mb-3" src="img/fotobook.jpg" alt="FotoBook">
             <h5>FotoBook</h5>
             <p>Lorem, deren, trataro, filede, nerada</p>
             <h5 class="text-danger fw-bold">$13.00</h5>
           </div>
         </div>

         <!-- Service Item -->
         <div class="col-md-6 col-lg-4">
           <div class="p-4 border-bottom">
             <img class="img-fluid mb-3" src="img/wedding.jpg" alt="Wedding">
             <h5>Wedding</h5>
             <p>Lorem, deren, trataro, filede, nerada</p>
             <h5 class="text-danger fw-bold">$50.00</h5>
           </div>
         </div>

         <!-- Service Item -->
         <div class="col-md-6 col-lg-4">
           <div class="p-4 border-end">
             <img class="img-fluid mb-3" src="img/prewedding.jpg" alt="Prewedding">
             <h5>Prewedding</h5>
             <p>Lorem, deren, trataro, filede, nerada</p>
             <h5 class="text-danger fw-bold">$30.00</h5>
           </div>
         </div>

         <!-- Service Item -->
         <div class="col-md-6 col-lg-4">
           <div class="p-4 border-end">
             <img class="img-fluid mb-3" src="img/yearbook.jpg" alt="YearBook">
             <h5>YearBook</h5>
             <p>Lorem, deren, trataro, filede, nerada</p>
             <h5 class="text-danger fw-bold">$20.00</h5>
           </div>
         </div>

         <!-- Service Item -->
         <div class="col-md-6 col-lg-4">
           <div class="p-4">
             <img class="img-fluid mb-3" src="img/rentalkamera.jpg" alt="Rental Kamera">
             <h5>Rental Kamera</h5>
             <p>Lorem, deren, trataro, filede, nerada</p>
             <h5 class="text-danger fw-bold">$10.00</h5>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background:#008080; border-color #008080"><i class="bi bi-arrow-up"></i></a>


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
