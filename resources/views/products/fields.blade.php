<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_name', 'Product Name:') !!}
    {!! Form::text('Product_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Product Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_brand', 'Product Brand:') !!}
    {!! Form::text('Product_brand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::text('Price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::text('Description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>