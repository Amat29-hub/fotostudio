@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm rounded-3">
        <div class="card-body p-4">

          <h4 class="mb-4 fw-bold text-center">Detail Contact Us</h4>

          <div class="d-flex justify-content-center">
            <table class="table table-borderless w-auto detail-table">
              <tr>
                <th>First Name</th>
                <td>{{ $contact->first_name }}</td>
              </tr>
              <tr>
                <th>Last Name</th>
                <td>{{ $contact->last_name }}</td>
              </tr>
              <tr>
                <th>Subject</th>
                <td>{{ $contact->subject }}</td>
              </tr>
              <tr>
                <th>Description</th>
                <td>{{ $contact->description }}</td>
              </tr>
              <tr>
                <th>Status</th>
                <td>
                  @if($contact->is_active)
                    <span class="badge bg-success">Active</span>
                  @else
                    <span class="badge bg-secondary">Inactive</span>
                  @endif
                </td>
              </tr>
            </table>
          </div>

          <div class="mt-4 d-flex justify-content-center">
            <a href="{{ route('contactus.index') }}"
               class="btn px-4"
               style="background-color:#0C8CE9; color:#fff;">
              <i class="ti-arrow-left"></i> Kembali
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .detail-table th {
    text-align: left;       /* label rata kiri */
    padding-right: 20px;    /* jarak antara label dan value */
    min-width: 150px;       /* lebar label seragam */
    vertical-align: middle;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .detail-table td {
    text-align: left;
    vertical-align: middle;
    padding-top: 10px;
    padding-bottom: 10px;
  }
</style>
@endsection
