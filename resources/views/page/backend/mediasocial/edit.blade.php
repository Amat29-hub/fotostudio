@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4">Edit Media Social</h4>

          <form action="{{ route('mediasocial.update', $mediasocial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Photo --}}
            <div class="mb-4">
              <label for="photo" class="form-label">Photo</label>
              <input type="file" name="photo" id="photo"
                     class="form-control form-control-lg bg-light border-0">
            </div>

            {{-- Preview Foto Lama --}}
            @if($mediasocial->photo)
              <div class="mb-4">
                <img src="{{ asset('storage/'.$mediasocial->photo) }}" alt="Photo"
                     class="img-fluid rounded shadow-sm" style="max-width: 150px;">
              </div>
            @endif

            {{-- Name Account --}}
            <div class="mb-4">
              <label for="nameaccount" class="form-label">Name Account</label>
              <input type="text" name="nameaccount" id="nameaccount"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $mediasocial->nameaccount }}" required>
            </div>

            {{-- Media Social --}}
            <div class="mb-4">
              <label for="namemediasocial" class="form-label">Media Social</label>
              <input type="text" name="namemediasocial" id="namemediasocial"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $mediasocial->namemediasocial }}" required
                     placeholder="Contoh: Facebook, Instagram">
            </div>

            {{-- Link --}}
            <div class="mb-4">
              <label for="link" class="form-label">Link</label>
              <input type="url" name="link" id="link"
                     class="form-control form-control-lg bg-light border-0 py-3"
                     value="{{ $mediasocial->link }}" required
                     placeholder="https://...">
            </div>

            {{-- Tombol --}}
            <div class="d-flex justify-content-start mt-4">
              <button type="submit" class="btn btn-success me-2 px-4 py-2" style="background-color:#21BF06;">
                <i class="bi bi-save"></i> Simpan
              </button>
              <a href="{{ route('mediasocial.index') }}" class="btn btn-primary px-4 py-2" style="background-color:#0C8CE9;">
                <i class="bi bi-arrow-left"></i> Kembali
              </a>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
