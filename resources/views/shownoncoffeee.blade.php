@extends('layouts.app')

@section('body')
    <div style="background-color: #3f4e4f">
        <h3 class="px-5 mx-2 pt-3" style="color: #dcd7c9">
            <a href="/noncoffees" style="text-decoration: none; color: #dcd7c9">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                     class="bi bi-arrow-left-square-fill mb-1" viewBox="0 0 16 16">
                    <path
                        d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                </svg>
            </a>
            {{ $title }}
        </h3>
        <div class="d-flex" style="background-color: #3f4e4f">
            <div class="card mb-5 mt-5 mx-auto d-none d-md-block" style="width: 1200px; background-color: #dcd7c9">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src={{ $noncoffees['image'] }} style="width: 400px; height: 400px" alt="Product Picture">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="mb-3" style="color: #3f4e4f">{{ $noncoffees['name'] }}</h1>
                            <h6 class="card-text" style="color: #3f4e4f">Price : {{ $noncoffees['price'] }}</h6>
                            <h6 class="card-text" style="color: #3f4e4f">Purchase it at :</h6>
                            <div>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4008941077386!2d112.71890231477524!3d-7.308778994725104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb78acf8ffff%3A0xdd441e5ab849a5fc!2sRenekopi!5e0!3m2!1sen!2sid!4v1667314137481!5m2!1sen!2sid"
                                    width="450px" height="190px" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 d-block d-md-none mx-auto" style="background-color: #dcd7c9">
                <img src={{ $noncoffees['image'] }} class="card-img-top mx-auto" style="width: 400px; height: 400px"
                alt="Product Picture">
                <div class="card-body text-center">
                    <h1 class="mb-3">{{ $noncoffees['name'] }}</h1>
                    <h6 class="card-text">Price : {{ $noncoffees['price'] }}</h6>
                    <h6 class="card-text" style="color: #3f4e4f">Purchase it at :</h6>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4008941077386!2d112.71890231477524!3d-7.308778994725104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb78acf8ffff%3A0xdd441e5ab849a5fc!2sRenekopi!5e0!3m2!1sen!2sid!4v1667314137481!5m2!1sen!2sid"
                            width="300px" height="190px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
