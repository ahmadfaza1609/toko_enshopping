@extends('layouts.front')

@section('title', 'Toko Online Bumdes Mekar Jaya Sei Pakning')

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
                    <h1 class="display-5 fw-bold mb-4 lh-sm __title-hero">Belanja Mudah Hanya Di BUMDES Mekar Jaya Sungai Pakning</h1>
                    <p class="lead">Pusing cari barang di marketplace? dengan belanja online terpercaya, amanah,
                        dan mudah hanya di BUMDES Mekar Jaya sungai pakning.</p>
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
            <form action="/" method="GET" role="search">
                {{ csrf_field() }}
                <div class="input-group __search mt-4 m-auto justify-content-center" id="product">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search"
                        value="{{ request('search') }}">
=======
>>>>>>> Stashed changes

             <form action="/">
                <div class="input-group __search mt-4 m-auto justify-content-center">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search" value="{{ request('search')}}">
<<<<<<< Updated upstream
=======
>>>>>>> 23e22a5e0f7c280d161b9cb6e2de5876cb75ddf2
>>>>>>> Stashed changes
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

    {{-- courrusel video --}}
    <div id="carouselExampleFade" class=" mt-5 carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner container">
            <div class="carousel-item active rounded-sm">
                <iframe width="200" height="400" src="{{ url('https://www.youtube.com/embed/2XORHHSf3V8') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="d-block w-100" allowfullscreen></iframe>
            </div>
            <div class="carousel-item rounded-sm">
                <iframe width="200" height="400" src="{{ url('https://www.youtube.com/embed/2XORHHSf3V8') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="d-block w-100" allowfullscreen></iframe>
            </div>
            <div class="carousel-item rounded-sm">
                <iframe width="200" height="400" src="{{ url('https://www.youtube.com/embed/2XORHHSf3V8') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="d-block w-100" allowfullscreen></iframe>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
