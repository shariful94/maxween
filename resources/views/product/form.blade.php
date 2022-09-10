@include('partial.flash')
@include("partial.error")

<div class="form-group">
    {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
</div>
<div class="form-group">
    {!! Form::label('feature', 'Product Feature:'); !!}
    {!! Form::textarea('feature', null, ['required', 'class'=>'ckeditor form-control form-control-textarea', 'id'=>'feature', 'placeholder'=>'Feature']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Product Description:'); !!}
    {!! Form::textarea('description', null, ['required', 'class'=>'ckeditor form-control form-control-textarea', 'id'=>'description', 'placeholder'=>'Description']) !!}
</div>
<div class="form-group">
    {!! Form::label('information', 'Product Information:'); !!}
    {!! Form::textarea('information', null, ['required', 'class'=>'ckeditor form-control form-control-textarea', 'id'=>'information', 'placeholder'=>'Information']) !!}
</div>
<div class="form-group row">
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('regular_price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'regular_price', 'placeholder'=>'Regular Price']) !!}
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0">
        {!! Form::text('price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'price', 'placeholder'=>'Price']) !!}
    </div>
    <div class="col-sm-4">
        {!! Form::file('image[]', ['required','multiple', 'class'=>'form-control form-control-profile', 'id'=>'image']) !!}
    </div>
</div>