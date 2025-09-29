@extends('layouts.frontend.app')
@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow custom-spinner" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Hero Start -->
    <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">About Us</h1>
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                   <li class="breadcrumb-item"><a href="/" style="color:#008080;">Home</a></li>
                   <li class="breadcrumb-item"><a href="#" style="color:#008080;">Pages</a></li>
                   <li class="breadcrumb-item active" aria-current="page" style="color:#444444;">About Us</li>
               </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
         <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    {{-- Foto About (kosong kalau toggle off) --}}
                    @if($about && $about->photo)
                        <img class="img-fluid mb-3" src="{{ asset('storage/'.$about->photo) }}" alt="About Us">
                    @endif

                    {{-- Kontak (statis, selalu tampil) --}}
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
                    {{-- Title & Subtitle (statis, selalu tampil) --}}
                    <h1 class="font-dancing-script" style="color:#008080;">About Us</h1>
                    <h1 class="mb-5">Why People Choose Us!</h1>

                    {{-- Deskripsi (kosong kalau toggle off) --}}
                    @if($about && $about->description)
                        <p class="mb-4">
                            {{ $about->description }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


<!-- Team Start -->
<div class="container-fluid overflow-hidden py-5">
    <div class="container">
        {{-- Judul SELALU tampil --}}
        <div class="text-center wow fadeIn" data-wow-delay="0.2s">
            <h1 class="font-dancing-script" style="color:#008080;">Team Members</h1>
            <h1 class="mb-5">Our Experienced Specialists</h1>
        </div>

        {{-- Bagian Team Members --}}
        @if($tenagakerjas->count() > 0)
            <div class="row g-4 team justify-content-center">
                @foreach ($tenagakerjas as $index => $team)
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                        <div class="team-item position-relative overflow-hidden">
                            {{-- Foto --}}
                            @if($team->photo)
                                <img class="img-fluid w-100" src="{{ asset('storage/'.$team->photo) }}" alt="{{ $team->name }}">
                            @endif

                            {{-- Overlay --}}
                            <div class="team-overlay text-center p-3">
                                @if($team->position)
                                    <p class="text-primary mb-1">{{ $team->position }}</p>
                                @endif
                                @if($team->name)
                                    <h4>{{ $team->name }}</h4>
                                @endif
                                @if($team->description)
                                    <small class="text-secondary">{{ $team->description }}</small>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
<!-- Team End -->






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
