@extends('layouts.app')

@section('body')
<div style="background: #3f4e4f">
    <h1 class="text-center" style="color: #dcd7c9">{{ $title }}</h1>
    <div class="container text-center ">
        <div class="row ">
            @foreach ($coffees as $coffee)
                <div class="col-auto col-md-4 mx-auto ">
                    <div class="card my-4 mx-auto" style="height: 23rem; width: 16rem; background-color:#dcd7c9;">
                        <img src="{{ $coffee['image'] }}" class="card-img-top" style=" height: 230px" alt="Product picture">
                        <div class="card-body">
                            <h5 class="card-title">{{ $coffee['name'] }}</h5>
                            <div class="d-flex">
                                <a href="/coffees/{{ $coffee['code'] }}" style="background-color:#516ab0; color: #ffffff"  class="btn  align-items-center justify-content-center mx-auto">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
