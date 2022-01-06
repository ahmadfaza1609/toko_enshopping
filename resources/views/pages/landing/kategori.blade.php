@extends('layouts.front')

@section('title', 'Kategori Product')
    
@section('content')
<div class="__content-product">
    <div class="container">
        <div class="__header-text-product mt-xl-5">
            <h1 class="m-auto justify-content-center text-center lh-sm fw-bold fs-3  __title-product pb-3">Kategori Product</h1>
            <p class="lead m-auto justify-content-center text-center lh-base fs-6 __lead-text">Product terbaik yang ada di EN-Shopping</p>
        </div>

        <div class="d-flex justify-content-center py-5">
            <ul class="nav link-dark">
                <li class="nav-item"><a href="#" class="nav-link btn-sm btn-dark rounded link-secondary mx-md-3 shadow-sm active">Semua</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark btn-sm btn-light rounded shadow-sm ">Tokopedia</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark btn-sm btn-light mx-md-3 rounded shadow-sm ">Shopee</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark btn-sm btn-light rounded shadow-sm ">Lazada</a></li>
            </ul>
        </div>

        <div class="__product-shop mb-4">
            @include('components.landing.product')
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
@endsection