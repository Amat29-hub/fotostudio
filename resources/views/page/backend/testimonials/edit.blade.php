@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4">Edit Testimonial</h4>

          <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-4">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" id="name"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $testimonial->name }}" required>
            </div>

            {{-- Description --}}
            <div class="mb-4">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description"
                        class="form-control form-control-lg bg-light border-0 py-3"
                        rows="5" required>{{ $testimonial->description }}</textarea>
            </div>

            {{-- Rating --}}
            <div class="mb-4">
              <label class="form-label">Rating</label>

              {{-- Hidden input untuk simpan nilai rating --}}
              <input type="hidden" name="rating" id="rating" value="{{ round($testimonial->rating / 20) }}">

              {{-- Pilihan Bintang --}}
              <div id="starSelector">
                  @php
                      $stars = round($testimonial->rating / 20);
                  @endphp
                  @for ($i = 1; $i <= 5; $i++)
                      <i class="ti-star {{ $i <= $stars ? 'text-warning' : 'text-secondary' }} fs-3 star"
                         data-value="{{ $i }}" style="cursor:pointer;"></i>
                  @endfor
              </div>
            </div>



            {{-- Photo Profile --}}
            <div class="mb-4">
              <label for="photo_profile" class="form-label">Photo Profile</label>
              <input type="file" name="photo_profile" id="photo_profile"
                     class="form-control form-control-lg bg-light border-0">
            </div>

            {{-- Preview Foto Lama --}}
            @if($testimonial->photo_profile)
              <div class="mb-4">
                <img src="{{ asset('storage/'.$testimonial->photo_profile) }}" alt="Profile"
                     class="img-fluid rounded" style="max-width: 200px;">
              </div>
            @endif

            {{-- Tombol --}}
            <div class="d-flex justify-content-start mt-4">
              <button type="submit" class="btn btn-success me-2 px-4 py-2" style="background-color:#21BF06; margin-right:30px;">Simpan</button>
              <a href="{{ route('testimonials.index') }}" class="btn btn-primary px-4 py-2" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll("#starSelector .star");
    const ratingInput = document.getElementById("rating");

    stars.forEach(star => {
        star.addEventListener("click", function() {
            let value = this.getAttribute("data-value");
            ratingInput.value = value; // simpan rating ke hidden input

            // Update warna bintang
            stars.forEach((s, index) => {
                if (index < value) {
                    s.classList.remove("text-secondary");
                    s.classList.add("text-warning");
                } else {
                    s.classList.remove("text-warning");
                    s.classList.add("text-secondary");
                }
            });
        });
    });
});
</script>


@endsection
