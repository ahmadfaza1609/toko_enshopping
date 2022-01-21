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
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $no = 1;
        ?>
        @foreach($category as $c)
        <tr class="text-center">
            <td scope="row"><?php echo $no ?></td>
            <td>{{ $c->type_product }}</td>
            <td>
                <div class="row d-flex justify-content-center m-auto">
                    <div class="btn-edit col-md-2">
                        <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                    </div>
                    <div class="btn-delete col-md-2">

                        <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
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
