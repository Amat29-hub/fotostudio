@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">

          <h4 class="mb-4 fw-bold">Media Social</h4>

          {{-- Custom Table --}}
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="bg-white">
                <tr>
                  <th class="text-start border-0" style="width:120px;">Photo</th>
                  <th class="text-start border-0">Name Account</th>
                  <th class="text-start border-0">Media Social</th>
                  <th class="text-start border-0">Link</th>
                  <th class="text-start border-0">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mediasocial as $item)
                <tr style="background-color:#f8f9fa;">
                  {{-- Photo --}}
                  <td class="text-start py-3">
                    <img src="{{ asset('storage/'.$item->photo) }}" alt="photo"
                         class="img-fluid rounded shadow-sm" style="max-width:80px;">
                  </td>

                  {{-- Name Account --}}
                  <td class="text-start py-3">{{ $item->nameaccount }}</td>

                  {{-- Media Social --}}
                  <td class="text-start py-3">{{ $item->namemediasocial }}</td>

                  {{-- Link --}}
                  <td class="text-start py-3">
                    <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a>
                  </td>

                  {{-- Options --}}
                  <td class="text-center py-3">
                    <div class="d-flex flex-column align-items-center">
                      <div class="mb-2">
                        {{-- Edit --}}
                        <a href="{{ route('mediasocial.edit', $item->id) }}"
                           class="btn text-white btn-sm px-3 me-1"
                           style="background-color:#21BF06;">
                          <i class="ti-pencil"></i> Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('mediasocial.destroy', $item->id) }}" method="POST" class="delete-form d-inline">
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
            <a href="{{ route('mediasocial.create') }}"
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
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #ccc;
  transition: .4s;
  border-radius: 34px;
}
.slider:before {
  position: absolute;
  content: "";
  height: 20px; width: 20px;
  left: 3px; bottom: 3px;
  background-color: #fff; /* circle tetap putih */
  transition: .4s;
  border-radius: 50%;
  z-index: 2; /* pastikan terlihat */
}
input:checked + .slider {background-color: #2196F3;}
input:checked + .slider:before {transform: translateX(24px);}
.slider.round {border-radius: 34px;}
.slider.round:before {border-radius: 50%;}
</style>

{{-- AJAX + SweetAlert --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function(){

    // Toggle status with SweetAlert
    $(document).on('change', '.toggle-status', function() {
        let checkbox = $(this);
        let mediaId = checkbox.data('id');
        let status = checkbox.is(':checked') ? 1 : 0;

        $.ajax({
            url: "/adminpanel/mediasocial/" + mediaId + "/toggle-status",
            type: "PATCH",
            data: {
                _token: "{{ csrf_token() }}",
                is_active: status
            },
            success: function(response) {
                if(response.success){
                    Swal.fire({
                        icon: 'success',
                        title: response.status ? 'Aktif' : 'Nonaktif',
                        text: response.status ? 'Item berhasil diaktifkan.' : 'Item berhasil dinonaktifkan!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            },
            error: function(xhr){
                let res = xhr.responseJSON;
                let message = res && res.message ? res.message : 'Gagal update status!';
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: message
                });
                // kembalikan status checkbox ke sebelumnya
                checkbox.prop('checked', !checkbox.prop('checked'));
            }
        });
    });

    // SweetAlert konfirmasi hapus
    $('.btn-delete').on('click', function(e){
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
        }).then((result)=>{
            if(result.isConfirmed){
                form.submit();
            }
        });
    });

});
</script>
<script>
$(document).ready(function(){
    // Notifikasi sukses Create / Edit
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '{{ session("success") }}',
            showConfirmButton: false,
            timer: 1500
        });
    @endif
});
</script>
@endsection
