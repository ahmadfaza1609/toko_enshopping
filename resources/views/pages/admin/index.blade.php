@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Heading -->
    <h2 class="fw-bold ps-3 fs-4">Link Youtube</h2>
    <div class="ps-3 d-flex m-auto">
        <div class="btn-edit">
            <a href="#" class="btn btn-success btn-md"><i class="bi bi-pencil-square"></i> Edit Link</a>
        </div>
        <div class="btn-delete col">
            <form action="" method="post">

                <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i>Hapus Link</button>
            </form>
            {{-- <a href="{{ route('delete.product', $p->id) }}" class="btn btn-danger "><i class="bi bi-trash"></i></a> --}}
        </div>
    </div>


    <div id="carouselExampleFade" class=" mt-2 carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner container">
            <div class="carousel-item active rounded-sm">
                <iframe width="200" height="400" src="{{ url('https://www.youtube.com/embed/2XORHHSf3V8') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="d-block w-100" allowfullscreen></iframe>
            </div>
            <div class="carousel-item rounded-sm">
                <iframe width="200" height="400" src="{{ url('https://www.youtube.com/embed/cVEmxwyuG_M') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="d-block w-100" allowfullscreen></iframe>
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
@endsection
