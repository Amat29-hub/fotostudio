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
              <label for="rating" class="form-label">Rating (%)</label>
              <input type="number" name="rating" id="rating"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $testimonial->rating }}" min="0" max="100" required>
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
              <button type="submit" class="btn btn-success me-2 px-4 py-2" style="background-color:#21BF06;">Simpan</button>
              <a href="{{ route('testimonials.index') }}" class="btn btn-primary px-4 py-2" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
