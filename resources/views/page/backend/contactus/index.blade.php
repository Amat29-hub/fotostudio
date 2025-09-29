@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">

          <h4 class="mb-4 fw-bold">Contact Us</h4>

          {{-- Custom Table --}}
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="bg-white">
                <tr>
                  <th class="text-start border-0">First Name</th>
                  <th class="text-start border-0">Last Name</th>
                  <th class="text-start border-0">Subject</th>
                  <th class="text-start border-0">Description</th>
                  <th class="text-center border-0">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $item)
                <tr style="background-color:#f8f9fa;">

                  {{-- First Name --}}
                  <td class="text-start py-3">{{ $item->first_name }}</td>

                  {{-- Last Name --}}
                  <td class="text-start py-3">{{ $item->last_name }}</td>

                  {{-- Subject --}}
                  <td class="text-start py-3">{{ $item->subject }}</td>

                  {{-- Description --}}
                  <td class="text-start py-3">{{ $item->description }}</td>

                  {{-- Options --}}
                  <td class="text-center py-3">
                    {{-- Show --}}
                    <a href="{{ route('contactus.show', $item->id) }}"
                       class="btn text-white btn-sm px-3"
                       style="background-color:#0d6efd;">
                      <i class="ti-eye"></i> Show
                    </a>

                    {{-- Delete --}}
                    <form action="{{ route('contactus.destroy', $item->id) }}" method="POST" class="d-inline form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm px-3 btn-delete">
                            <i class="ti-trash"></i> Delete
                        </button>
                    </form>

                    {{-- Status --}}
                    <div class="mt-2">
                      @if($item->is_active)
                        <span class="badge bg-success">Sudah Dilihat</span>
                      @else
                        <span class="badge bg-danger">Belum Dilihat</span>
                      @endif
                    </div>
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
</div>

{{-- SweetAlert Delete Confirmation --}}
<script>
document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".btn-delete");

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            let form = this.closest(".form-delete");

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
    });
});
</script>

{{-- SweetAlert Success After Delete --}}
@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
        })
    });
</script>
@endif
@endsection
