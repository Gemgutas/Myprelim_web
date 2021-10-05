@extends('layouts.app')

@section('content')


    <section>
        <img src="{{asset('images\Apple-iPhone-11.jpg')}}" height="250px" alt="Iphone 11 pro ">
        <div>Product name: iphone 11 pro</div>
        <div>Product Brand: Apple iphone</div>
        <div>Product price: 40,000.00</div>

    </section>




    <section>
        <img src="{{asset('images\iphone11 64gb.png')}}" height="250px" alt="iphone 11 64gb">
        <div> Product name:iphone 11 64gb</div>
        <div>Product Brand: Apple iphone</div>
        <div>Product price: 38,000.00</div>

    </section>

    <section>
        <img src="{{asset('images\samsung s21.jpg')}}" height="250px" alt="samsung s21 ">
        <div>Product name: Samsung s21</div>
        <div>Product Brand: Samsung</div>
        <div>Product price: 32,000.00</div>
    </section>

    <section>
        <img src="{{asset('images\galaxy z flip.jpg')}}" height="250px" alt="galaxy flip ">
        <div>Product name: Galaxy Z flip</div>
        <div>Product Brand: Samsung</div>
        <div>Product price: 50,000.00</div>
    </section>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

