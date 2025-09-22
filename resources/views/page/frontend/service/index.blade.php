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
          @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
              <div class="p-4 border-end border-bottom">
                {{-- Foto --}}
                <img class="img-fluid mb-3"
                     src="{{ asset('storage/'.$service->photo) }}"
                     alt="{{ $service->title }}">

                {{-- Judul --}}
                <h5>{{ $service->title }}</h5>

                {{-- Deskripsi --}}
                <p>{{ $service->description }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Testimonial</h1>
                <h1 class="mb-5">What Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.3s">
                @foreach($testimonials as $item)
                    <div class="text-center bg-light p-4">
                        <i class="fa fa-quote-left fa-3x mb-3"></i>

                        {{-- Deskripsi --}}
                        <p>{{ $item->description }}</p>

                        {{-- Foto --}}
                        <img class="img-fluid mx-auto border p-1 mb-3"
                             src="{{ asset('storage/'.$item->photo_profile) }}"
                             alt="{{ $item->name }}"
                             style="width:100px; height:100px; border-radius:50%; object-fit:cover;">

                        {{-- Nama --}}
                        <h4 class="mb-1">{{ $item->name }}</h4>

                        {{-- Rating bintang --}}
                        @php
                           $stars = ceil($item->rating / 20);
                       @endphp

                       <div>
                           @for ($i = 1; $i <= 5; $i++)
                               @if ($i <= $stars)
                                   <i class="fas fa-star" style="color: #ffc107;"></i> {{-- Bintang kuning --}}
                               @else
                                   <i class="far fa-star" style="color: #ecb40d;"></i>    {{-- Bintang kosong abu --}}
                               @endif
                           @endfor
                       </div>
                    </div>
                @endforeach
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
