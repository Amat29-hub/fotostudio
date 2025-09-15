@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4 fw-bold">Detail Contact Us</h4>

          <table class="table table-borderless">
            <tr>
              <th class="text-start" style="width: 150px;">First Name</th>
              <td class="text-start">{{ $contact->first_name }}</td>
            </tr>
            <tr>
              <th class="text-start">Last Name</th>
              <td class="text-start">{{ $contact->last_name }}</td>
            </tr>
            <tr>
              <th class="text-start">Subject</th>
              <td class="text-start">{{ $contact->subject }}</td>
            </tr>
            <tr>
              <th class="text-start">Description</th>
              <td class="text-start">{{ $contact->description }}</td>
            </tr>
            <tr>
              <th class="text-start">Status</th>
              <td class="text-start">
                @if($contact->is_active)
                  <span class="badge bg-success">Active</span>
                @else
                  <span class="badge bg-secondary">Inactive</span>
                @endif
              </td>
            </tr>
          </table>

          <div class="mt-4 d-flex justify-content-between">
            <a href="{{ route('contactus.index') }}" class="btn btn-primary px-4">
              <i class="ti-arrow-left"></i> Kembali
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
