@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4 fw-bold">Edit Partner</h4>

          <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-4">
              <label for="name" class="form-label fw-bold">Name</label>
              <input type="text" name="name" id="name"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $partner->name }}" required>
            </div>

            {{-- Description --}}
            <div class="mb-4">
              <label for="description" class="form-label fw-bold">Description</label>
              <textarea name="description" id="description"
                        class="form-control form-control-lg bg-light border-0 py-3"
                        rows="5" required>{{ $partner->description }}</textarea>
            </div>

            {{-- Photo --}}
            <div class="mb-4">
              <label for="photo" class="form-label fw-bold">Photo</label>
              <input type="file" name="photo" id="photo"
                     class="form-control form-control-lg bg-light border-0">
            </div>

            {{-- Preview Foto Lama --}}
            @if($partner->photo)
              <div class="mb-4">
                <img src="{{ asset('storage/'.$partner->photo) }}" alt="Photo"
                     class="img-fluid rounded shadow-sm" style="max-width: 200px;">
              </div>
            @endif

            {{-- Tombol --}}
            <div class="d-flex justify-content-start mt-4">
              <button type="submit" class="btn btn-success me-2 px-4 py-2" style="background-color:#21BF06; margin-right:30px;">Simpan</button>
              <a href="{{ route('partners.index') }}" class="btn btn-primary px-4 py-2" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection
