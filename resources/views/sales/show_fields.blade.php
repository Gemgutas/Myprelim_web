<!-- Customer Field -->
<div class="col-sm-12">
    {!! Form::label('customer', 'Customer:') !!}
    <p>{{ $sales->customer }}</p>
</div>

<!-- Sales Revenue Field -->
<div class="col-sm-12">
    {!! Form::label('sales_revenue', 'Sales Revenue:') !!}
    <p>{{ $sales->sales_revenue }}</p>
</div>

