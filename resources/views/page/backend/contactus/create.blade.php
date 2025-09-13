@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg rounded-3">
        <div class="card-body">
          <h4 class="mb-4 fw-bold">Tambah Contact Us</h4>

          <form action="{{ route('contactus.store') }}" method="POST">
            @csrf

            {{-- First Name --}}
            <div class="mb-3">
              <label class="form-label fw-bold">First Name</label>
              <input type="text" name="first_name" class="form-control" required
                placeholder="Masukkan first name...">
            </div>

            {{-- Last Name --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Last Name</label>
              <input type="text" name="last_name" class="form-control"
                placeholder="Masukkan last name...">
            </div>

            {{-- Subject --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Subject</label>
              <input type="text" name="subject" class="form-control" required
                placeholder="Masukkan subject...">
            </div>

            {{-- Description --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <textarea name="description" class="form-control" rows="3" required
                placeholder="Masukkan deskripsi..."></textarea>
            </div>

            {{-- Buttons --}}
            <div class="d-flex gap-2">
              <button type="submit" class="btn text-white px-4" style="background-color:#21BF06;">
                Tambah
              </button>
              <a href="{{ route('contactus.index') }}" class="btn text-white px-4" style="background-color:#0C8CE9;">
                Kembali
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
