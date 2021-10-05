<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('Product_name', 'Product Name:') !!}
    <p>{{ $products->Product_name }}</p>
</div>

<!-- Product Brand Field -->
<div class="col-sm-12">
    {!! Form::label('Product_brand', 'Product Brand:') !!}
    <p>{{ $products->Product_brand }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('Price', 'Price:') !!}
    <p>{{ $products->Price }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('Description', 'Description:') !!}
    <p>{{ $products->Description }}</p>
</div>

