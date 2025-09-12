@extends('layouts.backend.app')
@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow rounded-3 border-0">
        <div class="card-body">
          <h4 class="mb-4 fw-bold">Edit</h4>

          <form action="{{ route('members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row mb-4">
              {{-- First Name --}}
              <div class="col-md-4">
                <label class="form-label fw-bold">First Name</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $member->name) }}"
                       class="form-control bg-light border-0 shadow-sm"
                       placeholder="Enter first name" required>
              </div>

              {{-- Price --}}
              <div class="col-md-4">
                <label class="form-label fw-bold">Price</label>
                <input type="number"
                       name="price"
                       value="{{ old('price', $member->price) }}"
                       class="form-control bg-light border-0 shadow-sm"
                       placeholder="Enter price" required>
              </div>

              {{-- Deadline --}}
              <div class="col-md-4">
                <label class="form-label fw-bold">Deadline</label>
                <input type="date"
                       name="deadline"
                       value="{{ old('deadline', $member->deadline) }}"
                       class="form-control bg-light border-0 shadow-sm" required>
              </div>
            </div>

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-success px-4" style="background-color:#21BF06;">Simpan</button>
              <a href="{{ route('members.index') }}" class="btn btn-primary px-4" style="background-color:#0C8CE9;">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
