@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">

          <h4 class="mb-4 fw-bold">Hero</h4>

          {{-- Custom Table --}}
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="bg-white">
                <tr>
                  <th class="text-start border-0" style="width:200px;">Photo</th>
                  <th class="text-start border-0">Title</th>
                  <th class="text-start border-0">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($heroes as $hero)
                <tr style="background-color:#f8f9fa;">
                  {{-- Photo --}}
                  <td class="text-start py-3">
                    <img src="{{ asset('storage/'.$hero->photo) }}" alt="photo"
                         class="img-fluid rounded shadow-sm" style="max-width:120px;">
                  </td>

                  {{-- Title --}}
                  <td class="text-start py-3">
                    <div class="fw-bold text-uppercase">{{ $hero->title }}</div>
                    <div>{{ $hero->subtitle }}</div>
                  </td>

                  {{-- Options --}}
                  <td class="text-center py-3">
                    <div class="d-flex flex-column align-items-center">
                      <div class="mb-2">
                        {{-- Edit --}}
                        <a href="{{ route('hero.edit', $hero->id) }}"
                           class="btn text-white btn-sm px-3 me-1"
                           style="background-color:#21BF06;">
                          <i class="ti-pencil"></i> Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('hero.destroy', $hero->id) }}" method="POST" class="delete-form d-inline">
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
                               data-id="{{ $hero->id }}"
                               {{ $hero->is_active ? 'checked' : '' }}>
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
            <a href="{{ route('hero.create') }}"
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

{{-- Custom CSS Toggle --}}
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
                        // Aktifkan -> matikan yang lain
                        $(selector).not(checkbox).prop('checked', false);
                        checkbox.prop('checked', true);
                        Swal.fire({ icon: 'success', title: 'Aktif', text: 'Item berhasil diaktifkan.', timer: 1500, showConfirmButton: false });
                    } else {
                        // Kalau tidak ada yang aktif sama sekali
                        if ($(selector + ':checked').length === 0) {
                            checkbox.prop('checked', true); // Balikkan
                            Swal.fire({
                                icon: 'warning',
                                title: 'Minimal 1 Aktif',
                                text: 'Minimal harus ada 1 hero yang aktif!'
                            });
                        } else {
                            Swal.fire({ icon: 'info', title: 'Nonaktif', text: 'Item berhasil dinonaktifkan.', timer: 1500, showConfirmButton: false });
                        }
                    }
                }
            },
            error: function() {
                Swal.fire({ icon: 'error', title: 'Error', text: 'Gagal update status!' });
                checkbox.prop('checked', !checkbox.prop('checked'));
            }
        });
    });
}

// Inisialisasi
$(document).ready(function() {
    initToggleStatus('.toggle-status', '/adminpanel/hero/');

    // SweetAlert konfirmasi hapus
    $('.btn-delete').on('click', function(e) {
        e.preventDefault();
        let form = $(this).closest('form');
        Swal.fire({
            title: 'Yakin hapus data ini?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
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

    // SweetAlert sukses setelah create
    @if(session('success'))
      Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: "{{ session('success') }}",
        timer: 2000,
        showConfirmButton: false
      });
    @endif
});
</script>
@endsection
