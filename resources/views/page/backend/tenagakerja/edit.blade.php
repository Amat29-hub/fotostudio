@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4">Edit Tenaga Kerja</h4>

          <form action="{{ route('tenagakerja.update', $tenagakerja->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-4">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" id="name"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $tenagakerja->name }}" required>
            </div>

            {{-- Position --}}
            <div class="mb-4">
              <label for="position" class="form-label">Position</label>
              <input type="text" name="position" id="position"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $tenagakerja->position }}" required>
            </div>

            {{-- Description --}}
            <div class="mb-4">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" id="description"
                        class="form-control form-control-lg bg-light border-0 py-3"
                        rows="5" required>{{ $tenagakerja->description }}</textarea>
            </div>

            {{-- Photo --}}
            <div class="mb-4">
              <label for="photo" class="form-label">Photo</label>
              <input type="file" name="photo" id="photo"
                     class="form-control form-control-lg bg-light border-0">
            </div>

            {{-- Preview Foto Lama --}}
            @if($tenagakerja->photo)
              <div class="mb-4">
                <img src="{{ asset('storage/'.$tenagakerja->photo) }}" alt="Photo"
                     class="img-fluid rounded" style="max-width: 200px;">
              </div>
            @endif

            {{-- Tombol --}}
            <div class="d-flex justify-content-start mt-4">
              <button type="submit" class="btn btn-success me-2 px-4 py-2" style="background-color:#21BF06;">Simpan</button>
              <a href="{{ route('tenagakerja.index') }}" class="btn btn-primary px-4 py-2" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
