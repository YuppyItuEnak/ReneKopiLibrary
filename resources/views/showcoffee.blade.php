@extends('layouts.app')

@section('body')
    <div>
        <h3 class="px-5 mx-2 mt-3">{{ $title }}</h3>
    <div class="d-flex">
        <div class="card mb-5 mt-5 mx-auto d-none d-md-block" style="width: 1200px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src={{ $coffees['image'] }} style="width: 400px; height: 400px" alt="Product Picture">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="mb-3">{{ $coffees['name'] }}</h1>
                        <h6 class="card-text">Price : {{ $coffees['price'] }}</h6>
                        <p class="card-text pt-3">Description : {{ $coffees['desc'] }}</p>
                        {{-- <a href="https://wa.me/6285173380018"
                            class="btn btn-primary align-items-center justify-content-center mx-auto">Buy</a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 d-block d-md-none mx-auto">
            <img src={{ $coffees['image'] }} class="card-img-top" style="width: 300px; height: 300px" alt="Product Picture">
            <div class="card-body text-center">
                <h1 class="mb-3">{{ $coffees['name'] }}</h1>
                <h6 class="card-text">Price : {{ $coffees['price'] }}</h6>
                <p class="card-text pt-3">Description : {{ $coffees['desc'] }}</p>

                <a href="https://wa.me/6285173380018"
                    class="btn btn-primary align-items-center justify-content-center mx-auto">Buy</a>
            </div>
        </div>
    </div>
    </div>
@endsection
