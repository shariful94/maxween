@extends('layouts.admin')

@section('pagetitle')
    Add Gallery
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Gallery</h6>
            <a href="{{url('gallery')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Category List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        @include('partial.flash')
        @include("partial.error")
        <div class="card-body">
            {{Form::open(['route' => 'gallery.store','class'=>'user','enctype'=>'multipart/form-data'])}}

            <div class="form-group">
                {!! Form::file('name[]', ['required', 'multiple', 'class'=>'form-control form-control-profile', 'id'=>'name']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Gallery', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

