@extends('layouts.backend.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h4 class="mb-4">Edit</h4>

                {{-- Error Validation --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('members.update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-4">
                        {{-- First Name --}}
                        <div class="col-md-4">
                            <label class="form-label fw-bold">First Name</label>
                            <input type="text"
                                   name="name"
                                   class="form-control bg-light"
                                   value="{{ old('name', $member->name) }}"
                                   placeholder="Enter first name"
                                   required>
                        </div>

                        {{-- Price --}}
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Price</label>
                            <input type="number"
                                   name="price"
                                   step="0.01"
                                   class="form-control bg-light"
                                   value="{{ old('price', $member->price) }}"
                                   placeholder="Enter price"
                                   required>
                        </div>

                        {{-- Deadline --}}
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Deadline</label>
                            <input type="date"
                                   name="deadline"
                                   class="form-control bg-light"
                                   value="{{ old('deadline', $member->deadline) }}"
                                   required>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('members.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
