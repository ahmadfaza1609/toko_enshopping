@extends('layouts.front')

@section('title', 'Home Page')

@section('content')

    {{-- Hero Section --}}
    <div class="__hero-section">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('/assets/images/img-shop.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4 lh-sm __title-hero">Belanja Mudah Hanya Di BUMDES Sei. Pakning</h1>
                    <p class="lead">Pusing cari barang di marketplace? dengan belanja online terpercaya, amanah,
                        dan mudah hanya di BUMDES Sei.Pakning.</p>
                    <div class="d-grid gap-2 pt-4 d-md-flex justify-content-md-start">
                        <a data-link="product" class="btn link-product btn-success btn-lg px-4 me-md-2">Belanja Sekarang</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Content Product --}}
    <div class="__content-product">
        <div class="container">
            <div class="__header-text-product mt-5">
                <h1 class="m-auto justify-content-center text-center lh-sm fw-bold fs-3  __title-product pb-3">Belanja
                    Produkmu Ditempat Marketplace Yang Anda Sering Gunakan</h1>
                <p class="lead m-auto justify-content-center text-center lh-base fs-6 __lead-text">Mari belanja sesuai
                    seleramu dengan marketplace seperti shopee, lazada, dan tokopedia akun yang kamu punya.</p>
            </div>
            <form action="/" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group __search mt-4 m-auto justify-content-center"  id="product">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>

            <div class="__product-shop mb-4 mt-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    @foreach ($product as $p)
                        {{-- @include('components.landing.product', ['product' => $product]) --}}

                        <div class="col">
                            <a href="{{ route('detail.landing', $p->id) }}" class="text-decoration-none __body-card">
                                <div class="card shadow rounded __box-product ">
                                    <img src="{!! asset('data_photo/' . $p->photo) !!}" alt="placeholder" class="card-img-top" width="100%"
                                        height="225" />

                                    <div class="card-body">
                                        <h1 class="card-title fs-5 fw-bold">{{ $p->title }} </h1>
                                        <p class="card-text __price">Rp. {{ $p->price }}</p>
                                        <div class="d-flex justify-content-between align-items-center pt-3">

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">{{ $product->links() }}</div>

        </div>

    </div>


    {{-- feedbacks --}}
    <div class="__feedback container pt-5 mb-5">
        <div class="__box-feedback bg-warning rounded shadow">
            <div class="d-flex p-4 justify-content-evenly align-self-center">
                @include('components.landing.feedback')
            </div>
        </div>
    </div>

@endsection
