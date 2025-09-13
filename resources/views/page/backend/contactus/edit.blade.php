@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4">Edit Contact Us</h4>

          <form action="{{ route('contactus.update', $contactus->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- First Name --}}
            <div class="mb-4">
              <label for="first_name" class="form-label">First Name</label>
              <input type="text" name="first_name" id="first_name"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $contactus->first_name }}" required>
            </div>

            {{-- Last Name --}}
            <div class="mb-4">
              <label for="last_name" class="form-label">Last Name</label>
              <input type="text" name="last_name" id="last_name"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $contactus->last_name }}">
            </div>

            {{-- Subject --}}
            <div class="mb-4">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" name="subject" id="subject"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $contactus->subject }}" required>
            </div>

            {{-- Description --}}
            <div class="mb-4">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description"
                        class="form-control form-control-lg bg-light border-0 py-3"
                        rows="5">{{ $contactus->description }}</textarea>
            </div>

            {{-- Tombol --}}
            <div class="d-flex justify-content-start mt-4">
              <button type="submit" class="btn btn-success me-2 px-4 py-2" style="background-color:#21BF06;">
                Simpan
              </button>
              <a href="{{ route('contactus.index') }}" class="btn btn-primary px-4 py-2" style="background-color:#0C8CE9;">
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
