@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg rounded-3">
        <div class="card-body">
          <h4 class="mb-4 fw-bold">Tambah Tenaga Kerja</h4>

          <form action="{{ route('tenagakerja.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="name" class="form-control" required
                placeholder="Masukkan nama tenaga kerja...">
            </div>

            {{-- Description --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <textarea name="description" class="form-control" rows="3" required
                placeholder="Masukkan deskripsi singkat..."></textarea>
            </div>

            {{-- Position --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Position</label>
              <input type="text" name="position" class="form-control" required
                placeholder="Masukkan posisi tenaga kerja...">
            </div>

            {{-- Photo --}}
            <div class="mb-3">
              <label class="form-label fw-bold">Photo</label>
              <input type="file" name="photo" class="form-control">
            </div>

            {{-- Buttons --}}
            <div class="d-flex gap-2">
              <button type="submit" class="btn text-white px-4" style="background-color:#21BF06;">Tambah</button>
              <a href="{{ route('tenagakerja.index') }}" class="btn text-white px-4" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
