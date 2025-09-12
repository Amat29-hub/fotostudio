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
              <label class="form-label fw-bold">Rating (%)</label>
              <input type="number" name="rating" class="form-control" required min="0" max="100"
                placeholder="Masukkan rating (0-100)">
            </div>

            {{-- Photo Profile --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Photo Profile</label>
              <input type="file" name="photo_profile" class="form-control">
            </div>

            {{-- Buttons --}}
            <div class="d-flex gap-2">
              <button type="submit" class="btn text-white px-4" style="background-color:#21BF06;">Tambah</button>
              <a href="{{ route('testimonials.index') }}" class="btn text-white px-4" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
