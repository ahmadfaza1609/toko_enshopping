@extends('layouts.front')

@section('title', 'Detail Product')

@section('content')

    <div class="container mt-xl-5">



        {{-- detail product --}}
        <div class="__detail-product">
            <div class="justify-content-center">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('https://media.istockphoto.com/photos/mens-tshirt-isolated-on-a-white-background-picture-id1193475675?s=2048x2048') }}"
             
                        alt="image" width="100%" class="mx-auto d-block rounded">
                    </div>
                    <div class="col-md-6">
                        {{-- breadcrumb --}}
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Product</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="light-drag">

                    </div>
                </div>
            </div>
        </div>


        {{-- product terbaru --}}
        <div class="__lasts-product mt-xl-3">
            <h2 class="fw-md fs-5 pt-5 pb-2 fst-normal">Product Terbaru</h2>
            @include('components.landing.product')
        </div>
    </div>
@endsection
