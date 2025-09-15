@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg rounded-3">
        <div class="card-body">
          <h4 class="mb-4 fw-bold">Tambah About</h4>

          <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Description --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <textarea name="description" class="form-control" rows="3" required
                placeholder="Masukkan deskripsi..."></textarea>
            </div>

            {{-- Photo --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Photo</label>
              <input type="file" name="photo" class="form-control" required>
            </div>

            {{-- Buttons --}}
            <div class="d-flex gap-2">
              <button type="submit" class="btn text-white px-4" style="background-color:#21BF06; margin-right:30px;">Tambah</button>
              <a href="{{ route('about.index') }}" class="btn text-white px-4" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
