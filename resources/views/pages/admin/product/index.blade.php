@extends('layouts.app')

@section('title', 'Product')

@section('content')
<div class="text-left">
    <h2 class="fw-bold fs-4">@yield('title')</h2>
    <p class="fs-6">Semua data product masuk dalam tabel dibawah ini</p>
    <div class="btn-component my-4">
        @include('components.admin.buttons')
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
        <?php
        $no = 1;
        ?>
        @foreach($product as $p)
        <tr class="text-center">
            <td scope="row"><?php echo $no ?></td>
            <td>{{ $p->title}}</td>
            <td>{{ $p->category_product->type_product}}</td>
            <td>{{ $p->stock}}</td>
            <td>{{ $p->price}}</td>
            <td>
                <div class="row d-flex justify-content-center m-auto">
                    <div class="btn-view col-md-2">
                        <a href="#" class="btn btn-warning "><i class="bi bi-eye-fill"></i></a>
                    </div>
                    <div class="btn-edit col-md-2">
                        <a href="{{ route('edit.admin', $p->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    <div class="btn-delete col-md-2">
                        <form action="{{ route('delete.product', $p->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                        </form>
                        {{-- <a href="{{ route('delete.product', $p->id) }}" class="btn btn-danger "><i class="bi bi-trash"></i></a> --}}
                    </div>
                </div>
            </td>
        </tr>
        <?php
        $no++;
        ?>
        @endforeach

    </tbody>
</table>
@endsection
