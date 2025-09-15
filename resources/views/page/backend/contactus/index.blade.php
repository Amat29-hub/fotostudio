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
                  <th class="text-start border-0">Options</th>
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
                    <div class="d-flex flex-column align-items-center">
                      <div class="mb-2">
                        {{-- Detail --}}
                        <a href="{{ route('contactus.show', $item->id) }}"
                           class="btn text-white btn-sm px-3"
                           style="background-color:#0d6efd;">
                          <i class="ti-eye"></i> Detail
                        </a>
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

{{-- AJAX Toggle --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('change', '.toggle-status', function() {
    let contactId = $(this).data('id');
    let status = $(this).is(':checked') ? 1 : 0;

    $.ajax({
        url: "/adminpanel/contactus/" + contactId + "/toggle-status",
        type: "PATCH",
        data: {
            _token: "{{ csrf_token() }}",
            is_active: status
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
