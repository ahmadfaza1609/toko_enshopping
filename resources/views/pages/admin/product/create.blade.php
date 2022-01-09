@extends('layouts.app')

@section('title', 'Tambah Product')

@section('content')
    <div class="text-left">
        <h2 class="fw-bold fs-4">@yield('title')</h2>
        <p class="fs-6">tambahkan data product diform ini</p>
        <div class="btn-component my-4">

        </div>
    </div>
    <!-- Page form create -->
    <form method="POST" action="">
        <div class="col-md-8">

            <div class="mb-3">
                <label for="title" class="form-label">Judul Product</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul product"
                    autofocus required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock Barang</label>
                <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan stock barang"
                    autofocus required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Foto Product</label>
                <input class="form-control" type="file" id="photo" name="photo" placeholder="Foto product" autofocus
                    required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Kategori product</label>
                <select class="form-select" aria-label="category">
                    <option selected>Pilih kategori product</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="row d-flex">
                <div class="mb-3 col-md-4">
                    <label for="link_shoope" class="form-label">Link Shopee</label>
                    <input type="text" class="form-control" id="link_shoope" name="link_shoope"
                        placeholder="Masukkan link shopee jika ada.." autofocus>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="link_tokped" class="form-label">Link Tokopedia</label>
                    <input type="text" class="form-control" id="link_tokped" name="link_tokped"
                        placeholder="Masukkan link tokopedia jika ada.." autofocus>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="link_lazada" class="form-label">Link Lazada</label>
                    <input type="text" class="form-control" id="link_lazada" name="link_lazada"
                        placeholder="Masukkan link lazada jika ada.." autofocus>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi product</label>
                <textarea class="form-control" placeholder="Masukkan deskripsi product.." id="description" name="description" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>

@endsection
