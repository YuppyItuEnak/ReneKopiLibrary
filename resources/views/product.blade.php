@extends('layouts.app')

@section('body')
<h1 class="text-center ">{{ $title }}</h1>
<div class="container text-center ">
    <div class="row ">
        @foreach ($coffees as $coffee)
            <div class="col-auto col-md-4 mx-auto ">
                <div class="card my-4 mx-auto" style="width: 15rem; background-color:#dce6ff">
                    <img src="{{ $coffee['image'] }}" class="card-img-top" style=" height: 230px" alt="Product picture">
                    <div class="card-body">
                        <h5 class="card-title">{{ $coffee['name'] }}</h5>
                        <div class="d-flex">
                            <a href="/detailproduct/{{ $coffee['code'] }}" style="background-color:#516ab0; color: #ffffff"  class="btn  align-items-center justify-content-center mx-auto">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
