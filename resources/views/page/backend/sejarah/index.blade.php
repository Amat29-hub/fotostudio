@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">

          <h4 class="mb-4 fw-bold">Sejarah</h4>

          {{-- Custom Table --}}
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="bg-white">
                <tr>
                  <th class="text-start border-0" style="width:180px;">Photo</th>
                  <th class="text-start border-0">Title</th>
                  <th class="text-start border-0">Description</th>
                  <th class="text-start border-0">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sejarah as $item)
                <tr style="background-color:#f8f9fa;">
                  {{-- Photo --}}
                  <td class="text-start py-3">
                    <img src="{{ asset('storage/'.$item->photo) }}" alt="photo"
                         class="img-fluid rounded shadow-sm" style="max-width:120px;">
                  </td>

                  {{-- Title --}}
                  <td class="text-start py-3">
                    <div>{{ $item->title }}</div>
                  </td>

                  {{-- Description --}}
                  <td class="text-start py-3">
                    <div>{{ $item->description }}</div>
                  </td>

                  {{-- Options --}}
                  <td class="text-center py-3">
                    <div class="d-flex flex-column align-items-center">
                      <div class="mb-2">
                        {{-- Edit --}}
                        <a href="{{ route('sejarah.edit', $item->id) }}"
                           class="btn text-white btn-sm px-3 me-1"
                           style="background-color:#21BF06;">
                          <i class="ti-pencil"></i> Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('sejarah.destroy', $item->id) }}" method="POST" class="d-inline form-delete">
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
                               data-id="{{ $item->id }}"
                               {{ $item->is_active ? 'checked' : '' }}>
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
            <a href="{{ route('sejarah.create') }}"
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

{{-- Script AJAX + SweetAlert --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function initToggleStatus(selector, baseUrl) {
    $(document).on('change', selector, function() {
        let itemId = $(this).data('id');
        let checkbox = $(this);

        $.ajax({
            url: baseUrl + itemId + "/toggle-status",
            type: "PATCH",
            data: { _token: "{{ csrf_token() }}" },
            success: function(response) {
                if (response.success) {
                    if (response.status) {
                        $(selector).not(checkbox).prop('checked', false);
                        checkbox.prop('checked', true);

                        Swal.fire({
                            icon: 'success',
                            title: 'Aktif',
                            text: 'Item berhasil diaktifkan.',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else {
                        checkbox.prop('checked', false);
                        Swal.fire({
                            icon: 'info',
                            title: 'Nonaktif',
                            text: 'Item berhasil dinonaktifkan.',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }
                }
            },
            error: function(xhr) {
                let res = xhr.responseJSON;
                if (res && res.message) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Perhatian',
                        text: res.message
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Gagal update status!'
                    });
                }
                checkbox.prop('checked', !checkbox.prop('checked'));
            }
        });
    });
}

// Inisialisasi untuk Sejarah
$(document).ready(function() {
    initToggleStatus('.toggle-status', '/adminpanel/sejarah/');

    // SweetAlert untuk delete
    $(".btn-delete").on("click", function() {
        let form = $(this).closest(".form-delete");

        Swal.fire({
            title: "Yakin hapus?",
            text: "Data ini akan terhapus permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });

    // Alert sukses setelah delete (flash session dari controller)
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false
        });
    @endif
});
</script>
@endsection
