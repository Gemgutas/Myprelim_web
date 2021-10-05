<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Your Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Your_email', 'Your Email:') !!}
    {!! Form::text('Your_email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>