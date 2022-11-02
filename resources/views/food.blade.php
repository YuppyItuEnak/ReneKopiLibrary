@extends('layouts.app')

@section('body')
<div style="background: #3f4e4f">
    <h1 class="text-center pt-3" style="color: #dcd7c9; font-family: 'Florentia', sans-serif;
    ">{{ $title }}</h1>
    <div class="container text-center ">
        <div class="row ">
            @foreach ($foods as $food)
                <div class="col-auto col-md-4 mx-auto ">
                    <div class="card my-4 mx-auto" style="height: 23rem; width: 16rem; background-color:#dcd7c9;">
                        <img src="{{ $food['image'] }}" class="card-img-top" style=" height: 230px" alt="Product picture">
                        <div class="card-body">
                            <h5 class="card-title" style=" font-family: 'Florentia', sans-serif;
                            ">{{ $food['name'] }}</h5>
                            <div class="d-flex placeholder-glow">
                                <a href="/foodnsnacks/{{ $food['code'] }}" style="background-color: #3f4e4f; color: #ffffff"  class="btn align-items-center justify-content-center mx-auto">
                                    Details
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                      </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
