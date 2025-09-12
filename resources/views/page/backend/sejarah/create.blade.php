@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg rounded-3">
        <div class="card-body">
          <h4 class="mb-4 fw-bold">Tambah Sejarah</h4>

          <form action="{{ route('sejarah.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Title --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Title</label>
              <input type="text" name="title" class="form-control" required
                placeholder="Masukkan judul sejarah...">
            </div>

            {{-- Description --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <textarea name="description" class="form-control" rows="3" required
                placeholder="Masukkan deskripsi sejarah..."></textarea>
            </div>

            {{-- Photo --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Photo</label>
              <input type="file" name="photo" class="form-control">
            </div>

            {{-- Buttons --}}
            <div class="d-flex gap-2">
              <button type="submit" class="btn text-white px-4" style="background-color:#21BF06;">Tambah</button>
              <a href="{{ route('sejarah.index') }}" class="btn text-white px-4" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
