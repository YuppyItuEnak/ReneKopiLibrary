@extends('layouts.app')

@section('body')
    <div style="background-color: #3f4e4f">
        <h3 class="px-5 mx-2 pt-3" style="color: #dcd7c9">
            <a href="/coffees" style="text-decoration: none; color: #dcd7c9">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-arrow-left-square-fill mb-1" viewBox="0 0 16 16">
                <path
                    d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />
            </svg>
            </a>
            {{ $title }}
        </h3>
        <div class="d-flex" style="background-color: #3f4e4f">
            <div class="card mb-5 mt-5 mx-auto d-none d-md-block" style="width: 1200px; background-color: #dcd7c9">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src={{ $coffees['image'] }} style="width: 400px; height: 400px" alt="Product Picture">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="mb-3" style="color: #3f4e4f">{{ $coffees['name'] }}</h1>
                            <h6 class="card-text" style="color: #3f4e4f">Price : {{ $coffees['price'] }}</h6>
                            <p class="card-text pt-3">Description : {{ $coffees['desc'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 d-block d-md-none mx-auto">
                <img src={{ $coffees['image'] }} class="card-img-top mx-auto" style="width: 400px; height: 400px"
                    alt="Product Picture">
                <div class="card-body text-center">
                    <h1 class="mb-3">{{ $coffees['name'] }}</h1>
                    <h6 class="card-text">Price : {{ $coffees['price'] }}</h6>
                    <p class="card-text pt-3 limit-p">Description : {{ $coffees['desc'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
