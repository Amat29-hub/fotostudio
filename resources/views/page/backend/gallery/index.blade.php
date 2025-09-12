@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper pt-0">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow-sm rounded-3">
        <div class="card-body">

          <h4 class="mb-4 fw-bold">Gallery</h4>

          {{-- Custom Table --}}
          <div class="table-responsive">
            <table class="table align-middle mb-0">
              <thead class="bg-white">
                <tr>
                  <th class="text-start border-0" style="width:200px;">Photo</th>
                  <th class="text-start border-0">Title</th>
                  <th class="text-start border-0">Description</th>
                  <th class="text-start border-0">Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($galleries as $gallery)
                <tr style="background-color:#f8f9fa;">
                  {{-- Photo --}}
                  <td class="text-start py-3">
                    <img src="{{ asset('storage/'.$gallery->photo) }}" alt="photo"
                         class="img-fluid rounded shadow-sm" style="max-width:120px;">
                  </td>

                  {{-- Title --}}
                  <td class="text-start py-3">
                    <div>{{ $gallery->title }}</div>
                  </td>

                  {{-- Description --}}
                  <td class="text-start py-3">
                    <div>{{ $gallery->description }}</div>
                  </td>

                  {{-- Options --}}
                  <td class="text-center py-3">
                    <div class="d-flex flex-column align-items-center">
                      <div class="mb-2">
                        {{-- Edit --}}
                        <a href="{{ route('gallery.edit', $gallery->id) }}"
                           class="btn text-white btn-sm px-3 me-1"
                           style="background-color:#21BF06;">
                          <i class="ti-pencil"></i> Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" style="display:inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit"
                                  class="btn text-white btn-sm px-3"
                                  style="background-color:#DC3545;"
                                  onclick="return confirm('Yakin hapus data ini?')">
                            <i class="ti-trash"></i> Delete
                          </button>
                        </form>
                      </div>

                      {{-- Toggle --}}
                      <label class="switch mt-2">
                        <input type="checkbox" class="toggle-status"
                               data-id="{{ $gallery->id }}"
                               {{ $gallery->is_active ? 'checked' : '' }}>
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
            <a href="{{ route('gallery.create') }}"
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

{{-- AJAX --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('change', '.toggle-status', function() {
    let galleryId = $(this).data('id');

    $.ajax({
        url: "/adminpanel/gallery/" + galleryId + "/toggle-status",
        type: "PATCH",
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function(response) {
            if (response.success) {
                console.log("Status updated:", response.status);
            }
        },
        error: function(xhr) {
            alert("Gagal update status!");
            console.error(xhr.responseText);
        }
    });
});
</script>
@endsection
