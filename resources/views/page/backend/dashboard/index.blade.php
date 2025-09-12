@extends('layouts.backend.app')
@section('content')

<div class="content-wrapper pt-0">
  {{-- Row untuk Card Statistik --}}
  <div class="row mb-4">
    <!-- Today’s Bookings -->
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card card-light-blue">
        <div class="card-body text-center">
          <p class="mb-2">Today’s Bookings</p>
          <h3 class="mb-2">4006</h3>
          <p class="mb-0">10.00% (30 days)</p>
        </div>
      </div>
    </div>

    <!-- Total Bookings -->
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card card-dark-blue">
        <div class="card-body text-center">
          <p class="mb-2">Total Bookings</p>
          <h3 class="mb-2">61344</h3>
          <p class="mb-0">22.00% (30 days)</p>
        </div>
      </div>
    </div>

    <!-- Number of Clients -->
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card card-light-danger">
        <div class="card-body text-center">
          <p class="mb-2">Number of Clients</p>
          <h3 class="mb-2">47033</h3>
          <p class="mb-0">0.22% (30 days)</p>
        </div>
      </div>
    </div>
  </div> {{-- end row statistik --}}

  {{-- Row untuk Tabel Top Member --}}
  <div class="row mt-4">
    <div class="col-12 grid-margin stretch-card">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">
          <p class="card-title mb-3">Top Member</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless align-middle w-100">
              <thead class="table-light">
                <tr>
                  <th class="text-start">First Name</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Deadline</th>
                  <th class="text-end">Option</th>
                </tr>
              </thead>
              <tbody>
                @foreach($members as $member)
                <tr>
                  <td class="text-start">{{ $member->name }}</td>
                  <td class="text-center fw-bold">${{ $member->price }}</td>
                  <td class="text-center">{{ $member->deadline }}</td>
                  <td class="text-end">
                    <a href="{{ route('members.edit', $member->id) }}" class="btn btn-success btn-sm" style="background-color:#21BF06;">Edit</a>
                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" style="background-color:#DC3545;"
                              onclick="return confirm('Yakin hapus data ini?')">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- end row tabel --}}
</div>
@endsection
