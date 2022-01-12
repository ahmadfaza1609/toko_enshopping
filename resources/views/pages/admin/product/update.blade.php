@extends('layouts.app')

@section('title', 'Update Product')

@section('content')
    <div class="text-left">
        <h2 class="fw-bold fs-4">@yield('title')</h2>
        <p class="fs-6">Ubah data product diform ini</p>
        <div class="btn-component my-4">

        </div>
    </div>
    <!-- Page form create -->
    <form method="post"  action="{{ route('update.product', $product->id) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-md-8">

            <div class="mb-3">
                <label for="title" class="form-label">Judul Product</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul product" value="{{ old('title',$product->title) }}"
                    autofocus required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock Barang</label>
                <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan stock barang" value=" {{ old('stock',$product->stock) }}"
                    autofocus required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Masukkan harga barang" value=" {{ old('price',$product->price) }}"
                    autofocus required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Foto Product</label>
                <input class="form-control" type="file" id="photo" name="photo" placeholder="Foto product" value="{{$product->photo}}" autofocus
                    required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Kategori product</label>
                <select class="form-select" aria-label="category" name="category_id">
                    <option selected value="{{$product->category_id}}">{{$product->category_product->type_product}}</option>
                    @foreach($category as $c)
                    <option value="{{ $c->id }}">{{ $c->type_product}}</option>
                    @endforeach
                </select>
            </div>

            <div class="row d-flex">
                <div class="mb-3 col-md-4">
                    <label for="link_shoope" class="form-label">Link Shopee</label>
                    <input type="text" class="form-control" id="link_shoope" name="link_shoope" value="{{$product->link_shoope}}"
                        placeholder="Masukkan link shopee jika ada.." autofocus>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="link_tokped" class="form-label">Link Tokopedia</label>
                    <input type="text" class="form-control" id="link_tokped" name="link_tokped" value="{{$product->link_tokped}}"
                        placeholder="Masukkan link tokopedia jika ada.." autofocus>
                </div>

                <div class="mb-3 col-md-4">
                    <label for="link_lazada" class="form-label">Link Lazada</label>
                    <input type="text" class="form-control" id="link_lazada" name="link_lazada" value="{{$product->link_lazada}}"
                        placeholder="Masukkan link lazada jika ada.." autofocus>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi product</label>
                <textarea class="form-control" placeholder="Masukkan deskripsi product.." id="description" name="description" value="{{$product->description}}" required>{{$product->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Ubah Product</button>
        </div>
    </form>

@endsection
