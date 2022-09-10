@extends('layouts.admin')

@section('pagetitle')
    Gallery
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
        <h6 class="m-0 font-weight-bold">
            <a class="btn btn-primary btn-sm" href="{{url('gallery/create')}}">
                <i class="fas fa-plus fa-sm fa-fw mr-2"></i>
                Add Image
            </a>
        </h6>

    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="form-group row">
            @forelse ($allimages as $img)
            <div class="col-sm-3 pb-4">
            <div class="image-area">
              <img src="{{ url(Storage::url($img->name)) }}"  alt="Preview">
              <a class="remove-image" data-id="{{$img->id}}" href="javascript:void(0)" style="display: inline;">&#215;</a>
            </div>
            </div>
                
            @empty
                <p>No image available</p>
            @endforelse
                
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function () {
    var BASE_URL = '{{url('/')}}';
    $(document).on("click",".remove-image",function(){
        if(!confirm("Are You Sure?")){return;}
        $id = $(this).data('id');
        // alert("remove" + $id);
        $.ajax({
            type: "post",
            url: BASE_URL + "/imgdel",
            data: {
                id : $id
            },            
            success: function (response) {
                // console.log(response);
                if(response.done = 1){
                    location.reload();
                    // Swal.fire(
                    // 'Deleted!',
                    // response.message,
                    // 'success'
                }
            }
        });
    })
});
    </script>
@endsection