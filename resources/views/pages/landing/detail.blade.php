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
                        <li class="breadcrumb-item active" aria-current="page">Jagung Bakar Ubah Mudah</li>
                    </ol>
                </nav>
            </div>
        </div>

        {{-- detail product --}}
        <div class="__detail-product">
            <div class="container mb-5 pt-5">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12 product-image justify-content-center m-auto">
                        <img class="__img-big w-100 img-fluid rounded" id="MainImg" src="{{ url('https://media.istockphoto.com/photos/mens-tshirt-isolated-on-a-white-background-picture-id1193475675?s=2048x2048') }}"
                            alt="image">
{{-- 
                            <div class="__small-img-group d-flex justify-content-between pt-2">
                                <img class="rounded small-img"
                                    src="{{ url('https://media.istockphoto.com/photos/mens-tshirt-isolated-on-a-white-background-picture-id1193475675?s=2048x2048') }}" width="100%"
                                    alt="">

                                <img class="rounded small-img"
                                    src="{{ url('https://media.istockphoto.com/photos/blank-navy-tshirt-clothes-on-isolated-white-background-picture-id1266681859?s=2048x2048') }}"
                                    width="100%"
                                    alt="">

                                <img class="rounded small-img"
                                    src="{{ url('https://media.istockphoto.com/photos/blank-gray-tshirt-clothes-on-isolated-white-background-picture-id1266680002?s=2048x2048') }}"
                                    width="100%"
                                    alt="">

                            </div> --}}
                    </div>





                </div>
                <div class="mt-5">
                    <div class="description">
                        {{-- description --}}
                        <div class="title">
                            <h2 class="fw-bold fs-3">Jagung Bakar Ubah Mudah</h2>

                            <p class="fs-4 pt-3 fst-normal fw-normal __price">Rp. 5.000,00</p>

                            <p class="mt-2 fs-6 fst-italic __notif">
                                Deskripsi lengkap berada di marketplace
                            </p>
                            <div class="mt-5">
                                <div class="row d-flex justify-content-evenly align-items-center">
                                    <div class="col-6">
                                        <p class="fs-5">Beli Barang Melalui</p>
                                        <p class="fs-6 fst-italic ">Shopee</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="__stock">Stok barang : <b>3</b></p>
                                        <a href="#" class="btn btn-success">Beli Barang</a>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">
                                <h4 class="fw-normal fs-5 mb-3">
                                    Deskripsi Barang
                                </h4>
                                <p class="fs-6 __description-complete">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat illo alias iusto esse eum voluptatibus eos, corporis autem aspernatur aperiam, amet voluptas, ullam tempora similique? Quos facere neque perferendis minus!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eveniet quos omnis iusto, odit architecto mollitia. Minima voluptatem voluptas assumenda laboriosam optio minus cumque rem nihil iure, vero cupiditate rerum corrupti esse ipsam facilis similique voluptatibus aspernatur officia nesciunt laudantium sit, unde amet. Dicta perferendis architecto, numquam eveniet expedita ab deserunt exercitationem ullam ipsa id possimus sequi temporibus iure, quae praesentium repellat consequuntur autem nemo esse. Repudiandae id deleniti nobis nulla corrupti repellendus velit, placeat quasi eveniet porro impedit ut expedita itaque eum illo, eaque delectus odio numquam veritatis dolorum. Officiis nemo fugit suscipit ea illum vel qui distinctio. Non!
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        {{-- product terbaru --}}
        <div class="__lasts-product mt-xl-3 mb-5">
            <h2 class="fw-md fs-5 pt-5 pb-2 fst-normal">Product Terbaru</h2>
            @include('components.landing.product')
        </div>
    </div>
@endsection
