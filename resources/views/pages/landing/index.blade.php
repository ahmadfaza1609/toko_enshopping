@extends('layouts.front')

@section('title', 'Home Page')

@section('content')

    {{-- Hero Section --}}
    <div class="__hero-section" id="product">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('/assets/images/img-shop.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-4 lh-sm __title-hero">Belanja Mudah Dengan Toko Online EN-SHOPPING</h1>
                    <p class="lead">Pusing cari barang di marketplace? dengan belanja online terpercaya, amanah,
                        dan mudah hanya di EN-Shopping.</p>
                    <div class="d-grid gap-2 pt-4 d-md-flex justify-content-md-start">
                        <a href="#" class="btn btn-success btn-lg px-4 me-md-2">Belanja Sekarang</a>

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

            <div class="input-group __search mt-4 m-auto justify-content-center">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>

            <div class="d-flex justify-content-center py-5">
                <ul class="nav link-dark fs-6">
                    <li class="nav-item"><a href="#" class="nav-link link-secondary active">Semua</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark">Tokopedia</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark">Shopee</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark">Lazada</a></li>
                </ul>
            </div>

            <div class="__product-shop mb-4">
            @foreach($product as $p)
                @include('components.landing.product')
                @endforeach
            </div>

            <div class="__pagination mt-4 pb-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link link-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link link-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link link-dark" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link link-dark" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

    {{-- testimonials
    <div class="testimonials mt-5 mb-5" id="feedback">
        <!-- TESTIMONIALS -->
        <div class="container">
            <div class="__header-text-product pt-4">
                <h1 class="m-auto justify-content-center text-center lh-sm fw-bold fs-3  __title-product pb-3">
                    Testimonials Pengunjung</h1>
                <p class="lead m-auto justify-content-center text-center lh-base fs-6 __lead-text">Berikan review kamu
                    setelah mengunjungi website ini.</p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="customers-testimonials" class="owl-carousel">

                        <!--TESTIMONIAL 1 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-circle" src="https://uifaces.co/our-content/donated/bUkmHPKs.jpg"
                                    alt="">
                                <p class="fst-italic fs-6">"Dramatically maintain clicks-and-mortar solutions without
                                    functional
                                    solutions. Completely synergize resource taxing relationships via premier
                                    niche markets. Professionally cultivate."</p>
                            </div>
                            <div class="testimonial-name">EMILIANO AQUILANI</div>
                        </div>
                        <!--END OF TESTIMONIAL 1 -->
                        <!--TESTIMONIAL 2 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-circle" src="https://randomuser.me/api/portraits/men/78.jpg" alt="">
                                <p class="fst-italic fs-6">Dramatically maintain clicks-and-mortar solutions without
                                    functional
                                    solutions. Completely synergize resource taxing relationships via premier
                                    niche markets. Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">ANNA ITURBE</div>
                        </div>
                        <!--END OF TESTIMONIAL 2 -->
                        <!--TESTIMONIAL 3 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-circle" src="https://uifaces.co/our-content/donated/ukegoVAy.jpg"
                                    alt="">
                                <p class="fst-italic fs-6">Dramatically maintain clicks-and-mortar solutions without
                                    functional
                                    solutions. Completely synergize resource taxing relationships via premier
                                    niche markets. Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">LARA ATKINSON</div>
                        </div>
                        <!--END OF TESTIMONIAL 3 -->
                        <!--TESTIMONIAL 4 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-circle" src="https://uifaces.co/our-content/donated/ukegoVAy.jpg"
                                    alt="">
                                <p class="fst-italic fs-6">Dramatically maintain clicks-and-mortar solutions without
                                    functional
                                    solutions. Completely synergize resource taxing relationships via premier
                                    niche markets. Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">IAN OWEN</div>
                        </div>
                        <!--END OF TESTIMONIAL 4 -->
                        <!--TESTIMONIAL 5 -->
                        <div class="item">
                            <div class="shadow-effect">
                                <img class="img-circle" src="https://randomuser.me/api/portraits/men/35.jpg" alt="">
                                <p>Dramatically maintain clicks-and-mortar solutions without functional
                                    solutions. Completely synergize resource taxing relationships via premier
                                    niche markets. Professionally cultivate.</p>
                            </div>
                            <div class="testimonial-name">MICHAEL TEDDY</div>
                        </div>
                        <!--END OF TESTIMONIAL 5 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF TESTIMONIALS -->
    </div> --}}

    {{-- feedbacks --}}
    <div class="__feedback container pt-5 mb-5">
        <div class="__box-feedback bg-warning rounded shadow">
            <div class="d-flex p-4 justify-content-evenly align-self-center">
                @include('components.landing.feedback')
            </div>
        </div>
    </div>

@endsection
