@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Heading -->
    <h2 class="fw-bold ps-3 fs-4">Link Youtube</h2>
    @foreach($youtube as $y)
    <div class="ps-3 d-flex m-auto mt-3">
        <div class="btn-edit">
            <a href="{{ route('edit.youtube', $y->id) }}" class="btn btn-success btn-md"><i class="bi bi-pencil-square"></i> Edit Link</a>
        </div>
        <div class="btn-delete col">
            <form action="{{ route('delete.youtube', $y->id) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah kamu yakin menghapus data ini?')"><i class="bi bi-trash"></i> Hapus Link</button>
            </form>
            {{-- <a href="{{ route('delete.product', $p->id) }}" class="btn btn-danger "><i class="bi bi-trash"></i></a> --}}
        </div>
    </div>


    <div id="carouselExampleFade" class=" mt-2 carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner container">
            <div class="carousel-item active rounded-sm">
                <iframe width="200" height="400" src="{{ url($y->link) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="d-block w-100" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    @endforeach
@endsection
