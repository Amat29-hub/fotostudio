@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">

          <h4 class="mb-4 fw-bold">Testimonials</h4>

          {{-- Custom Table --}}
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="bg-white">
                <tr>
                  <th class="text-start border-0" style="width:200px;">Photo Profile</th>
                  <th class="text-start border-0">Name</th>
                  <th class="text-start border-0">Description</th>
                  <th class="text-start border-0">Rating</th>
                  <th class="text-start border-0">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($testimonials as $testimonial)
                <tr style="background-color:#f8f9fa;">
                  {{-- Photo Profile --}}
                  <td class="text-start py-3">
                    <img src="{{ asset('storage/'.$testimonial->photo_profile) }}" alt="photo"
                         class="img-fluid rounded shadow-sm" style="max-width:120px;">
                  </td>

                  {{-- Name --}}
                  <td class="text-start py-3">
                    <div>{{ $testimonial->name }}</div>
                  </td>

                  {{-- Description --}}
                  <td class="text-start py-3">
                    <div>{{ $testimonial->description }}</div>
                  </td>

                  {{-- Rating --}}
                  <td class="text-start py-3">
                    @php
                        $stars = round($testimonial->rating / 20);
                    @endphp
                    <div>
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $stars)
                                <i class="ti-star text-warning"></i>
                            @else
                                <i class="ti-star text-secondary"></i>
                            @endif
                        @endfor
                    </div>
                  </td>

                  {{-- Options --}}
                  <td class="text-center py-3">
                    <div class="d-flex flex-column align-items-center">
                      <div class="mb-2">
                        {{-- Edit --}}
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                           class="btn text-white btn-sm px-3 me-1"
                           style="background-color:#21BF06;">
                          <i class="ti-pencil"></i> Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="delete-form" style="display:inline">
                          @csrf
                          @method('DELETE')
                          <button type="button"
                                  class="btn text-white btn-sm px-3 btn-delete"
                                  style="background-color:#DC3545;">
                            <i class="ti-trash"></i> Delete
                          </button>
                        </form>
                      </div>

                      {{-- Toggle --}}
                      <label class="switch mt-2">
                        <input type="checkbox" class="toggle-status"
                               data-id="{{ $testimonial->id }}"
                               {{ $testimonial->is_active ? 'checked' : '' }}>
                        <span class="slider round"></span>
                      </label>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          {{-- Create New Button --}}
          <div class="text-center mt-4">
            <a href="{{ route('testimonials.create') }}"
               class="btn text-white px-4"
               style="background-color:#21BF06;">
              <i class="ti-plus"></i> Create New
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

{{-- Custom CSS untuk Toggle --}}
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 26px;
}
.switch input {opacity: 0; width: 0; height: 0;}
.slider {
  position: absolute; cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #ccc; transition: .4s; border-radius: 34px;
}
.slider:before {
  position: absolute; content: "";
  height: 20px; width: 20px;
  left: 3px; bottom: 3px;
  background-color: white; transition: .4s; border-radius: 50%;
}
input:checked + .slider {background-color: #2196F3;}
input:checked + .slider:before {transform: translateX(24px);}
.slider.round {border-radius: 34px;}
.slider.round:before {border-radius: 50%;}
</style>

{{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- AJAX Toggle + Delete --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('change', '.toggle-status', function() {
    let testimonialId = $(this).data('id');
    let isActive = $(this).is(':checked') ? 1 : 0;

    $.ajax({
        url: "{{ url('adminpanel/testimonials') }}/" + testimonialId + "/toggle-status",
        type: "PATCH",
        data: {
            _token: "{{ csrf_token() }}",
            is_active: isActive
        },
        success: function(response) {
            if (response.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Status berhasil diperbarui',
                    timer: 1500,
                    showConfirmButton: false
                });
            }
        },
        error: function(xhr) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Gagal update status!'
            });
        }
    });
});

// SweetAlert Delete
$(document).on('click', '.btn-delete', function(e) {
    e.preventDefault();
    let form = $(this).closest("form");

    Swal.fire({
        title: 'Apakah kamu yakin?',
        text: "Data akan dihapus permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});
</script>

{{-- Flash Message dari Laravel --}}
@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Berhasil!',
    text: "{{ session('success') }}",
    timer: 2000,
    showConfirmButton: false
});
</script>
@endif
@endsection
