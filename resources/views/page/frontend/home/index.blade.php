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

                {{-- Tampilkan hanya jika ada data --}}
                @if($heroes->count() > 0)
                    <div class="col-lg-6 hero-header-text py-5">
                        <div class="py-5 px-3 ps-lg-0">

                            {{-- Welcome selalu tampil kalau ada hero --}}
                            <h1 class="font-dancing-script animated slideInLeft" style="color:#008080;">Welcome</h1>

                            {{-- Judul dari database --}}
                            @foreach($heroes as $hero)
                                <h1 class="display-1 mb-4 animated slideInLeft">
                                    {{ $hero->title }}
                                </h1>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="owl-carousel header-carousel animated fadeIn">
                            @foreach($heroes as $hero)
                                @if($hero->photo)
                                    <div class="item">
                                        <img class="img-fluid" src="{{ asset('storage/'.$hero->photo) }}" alt="{{ $hero->title }}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
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



    <!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
       <div class="container">
           <div class="text-center wow fadeIn" data-wow-delay="0.2s">
               <h1 class="font-dancing-script" style="color:#008080;">Gallery</h1>
               <h1 class="mb-5">Explore Our Gallery</h1>
           </div>

           {{-- Masonry Grid --}}
           <div class="row" data-masonry='{"percentPosition": true }'>
               @foreach($galleries as $gallery)
                   <div class="col-sm-6 col-md-4 mb-4">
                       <div class="card border-0 shadow-sm">
                           {{-- Foto --}}
                           <div class="gallery-item position-relative">
                               <img src="{{ asset('storage/'.$gallery->photo) }}"
                                    class="card-img-top"
                                    alt="{{ $gallery->title }}">

                               {{-- Zoom Icon --}}
                               <div class="gallery-icon">
                                   <a href="{{ asset('storage/'.$gallery->photo) }}"
                                      class="btn btn-lg-square"
                                      style="background-color:#008080; border-color:#008080;"
                                      data-lightbox="Gallery-{{ $gallery->id }}">
                                      <i class="fa fa-eye"></i>
                                   </a>
                               </div>
                           </div>

                           {{-- Title & Description --}}
                           <div class="card-body text-center">
                               <h5 class="card-title">{{ $gallery->title }}</h5>
                               <p class="card-text text-muted small">{{ $gallery->description }}</p>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
    </div>
    <!-- Gallery End -->



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



    <!-- Partner Start -->
    <div class="container-fluid overflow-hidden py-5">
        <div class="container">
            {{-- Judul SELALU tampil --}}
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Partners</h1>
                <h1 class="mb-5">Our Partner</h1>
            </div>

            {{-- Bagian Partner --}}
            @if($partners->count() > 0)
                <div class="row g-4 team justify-content-center">
                    @foreach ($partners as $index => $partner)
                        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="{{ 0.3 + ($index * 0.2) }}s">
                            <div class="team-item position-relative overflow-hidden">
                                {{-- Foto --}}
                                @if($partner->photo)
                                    <img class="img-fluid w-100" src="{{ asset('storage/'.$partner->photo) }}" alt="{{ $partner->name }}">
                                @endif

                                {{-- Overlay --}}
                                <div class="team-overlay text-center p-3">
                                    @if($partner->name)
                                        <h4>{{ $partner->name }}</h4>
                                    @endif
                                    @if($partner->description)
                                        <p class="text-secondary mb-0">{{ $partner->description }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
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



    <!-- Start Media Social -->
    <div class="container-fluid py-5" style="background-color: #f8f0f0;">
        <div class="container">
            <div class="text-center wow fadeIn" data-wow-delay="0.2s">
                <h1 class="font-dancing-script" style="color:#008080;">Media Social</h1>
                <h1 class="mb-5">Find Us on Social Media</h1>
            </div>

            <div class="row justify-content-center">
                @foreach($mediasocials as $item)
                    <div class="col-lg-6 col-md-8 wow fadeIn mb-3" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center p-3 rounded-pill"
                             style="background-color: #008080; color: white;">

                            {{-- Foto Profil --}}
                            <img class="rounded-circle me-3"
                                 src="{{ asset('storage/'.$item->photo) }}"
                                 alt="{{ $item->name_account }}"
                                 style="width: 50px; height: 60px; object-fit: cover;">

                            {{-- Nama akun & icon --}}
                            <div class="flex-grow-1">
                                <i class="fab fa-{{ strtolower($item->namemediasocial) }} me-2"></i>
                                <span class="fs-5">{{ $item->nameaccount }}</span>
                            </div>

                            {{-- Tombol link --}}
                            <a href="{{ $item->link }}"
                               class="btn rounded-pill px-4"
                               style="background-color: #a8e6e3; border-color: #a8e6e3; color: #008080;"
                               target="_blank">
                                Kunjung!
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Media Social -->



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
