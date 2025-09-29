@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg rounded-3">
        <div class="card-body">
          <h4 class="mb-4 fw-bold">Tambah Testimonial</h4>

          <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="name" class="form-control" required
                placeholder="Masukkan nama klien...">
            </div>

            {{-- Description --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <textarea name="description" class="form-control" rows="3" required
                placeholder="Masukkan deskripsi testimonial..."></textarea>
            </div>

            {{-- Rating --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Rating</label>

              {{-- Hidden input untuk simpan nilai rating --}}
              <input type="hidden" name="rating" id="rating" value="0">

              {{-- Pilihan Bintang --}}
              <div id="starSelector">
                  @for ($i = 1; $i <= 5; $i++)
                      <i class="ti-star text-secondary fs-3 star"
                         data-value="{{ $i }}" style="cursor:pointer;"></i>
                  @endfor
              </div>
              <small class="text-muted">Klik bintang untuk memilih rating (1–5)</small>
            </div>

            {{-- Photo Profile --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Photo Profile</label>
              <input type="file" name="photo_profile" class="form-control">
            </div>

            {{-- Buttons --}}
            <div class="d-flex justify-content-start mt-4">
              <button type="submit" class="btn btn-success px-4 py-2" style="background-color:#21BF06; margin-right:30px;">Tambah</button>
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
