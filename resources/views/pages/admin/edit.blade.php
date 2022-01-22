@extends('layouts.app')

@section('title', 'linkYoutube')

@section('content')
<div class="text-left">
    <h2 class="fw-bold fs-4">@yield('title')</h2>
    <p class="fs-6">Masukkan link youtube dengan memilih share -> pilih embed -> copy link youtube</p>
    <div class="btn-component my-4">
        <div class="btn">
            <a href="" class="btn btn-primary btn-sm" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-plus"></i>
                Edit Link Youtube
            </a>
        </div>
    </div>
</div>
<!-- Page Heading -->
<!-- Page form create -->
<form method="post" action="{{ route('update.youtube', $youtube->id) }}" enctype="form-data">
    @method('put')
    @csrf
    <div class="col-md-8">

        <div class="row">
            <div class="col-md-8 mb-3">
                <label for="link" class="form-label">Link youtube</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="example https://www.youtube.com/embed/2XORHHSf3V8"
                    autofocus value="{{ old('link',$youtube->link) }}" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="title" class="form-label">Status Video</label>
                <select class="form-select" aria-label="Default select example" name="status" required>
                    <option selected value="{{ old('status',$youtube->status) }}">{{ $youtube->status }}</option>
                    <option value="active">active</option>
                    <option value="null">tidak aktif</option>
                  </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
</form>
@endsection
