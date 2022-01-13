@extends('layouts.app')

@section('title', 'kategori')

@section('content')
<div class="text-left">
    <h2 class="fw-bold fs-4">@yield('title')</h2>
    <p class="fs-6">Semua data product masuk dalam tabel dibawah ini</p>
    <div class="btn-component my-4">
        <div class="btn">
            <a href="" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-plus"></i>
                Tambah Data
            </a>
        </div>
    </div>
</div>
<!-- Page Heading -->
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr class="text-center">
            <th scope="col">No</th>
            <th scope="col">Nama Product</th>
            <th scope="col">Kategori</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <tr class="text-center">
            <td scope="row">1</td>
            <td>ini producy</td>
            <td>ini kategory</td>
            <td>stok</td>
            <td>50.000</td>
            <td>
                <div class="row d-flex justify-content-center m-auto">
                    <div class="btn-view col-md-2">
                        <a href="#" class="btn btn-warning "><i class="bi bi-eye-fill"></i></a>
                    </div>
                    <div class="btn-edit col-md-2">
                        <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    <div class="btn-delete col-md-2">

                        <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            </td>
        </tr>


    </tbody>
</table>
@endsection
