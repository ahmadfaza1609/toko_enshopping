@extends('layouts.front')

@section('title', 'Detail Product')

@section('content')
    <div class="container">
        {{-- breadcrumb --}}
        <div class="pt-md-5 mb-3">
            <div class="__breadcrumb shadow rounded">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb px-4 py-3">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Detail Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- detail product --}}
        <div class="__detail-product">
            <div class="container mb-5 pt-5">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12 product-image justify-content-center m-auto">
                        <img class="__img-big w-100 img-fluid rounded" id="MainImg" src="{!! asset('data_photo/'.$product->photo ) !!}"
                            alt="image">
                    </div>
                </div>
                <div class="mt-5">
                    <div class="description">
                        {{-- description --}}
                        <div class="title">
                            <h2 class="fw-bold fs-3">{{ $product->title}}</h2>

                            <p class="fs-4 pt-3 fst-normal fw-normal __price">Rp. {{ $product->price }}</p>

                            <p class="mt-2 fs-6 fst-italic __notif">
                                Deskripsi lengkap berada di marketplace
                            </p>
                            <div class="mt-5">
                                <div class="row d-flex justify-content-evenly align-items-center">
                                    <div class="col-6">
                                        <p class="fs-5">Beli Barang Melalui</p>
                                        <p class="fs-6 fst-italic ">Shopee, Tokopedia, Lazada</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="__stock">Stok barang : <b>{{ $product->stock}}</b></p>
                                        <a href="#" class="btn btn-warning">Shopee</a>
                                        <a href="#" class="btn btn-success">Lazada</a>
                                        <a href="#" class="btn btn-primary">Tokopedia</a>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">
                                <h4 class="fw-normal fs-5 mb-3">
                                    Deskripsi Barang
                                </h4>
                                <p class="fs-6 __description-complete">{{ $product->description }}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
