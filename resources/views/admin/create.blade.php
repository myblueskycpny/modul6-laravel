@extends('sb-admin/app')
@section('title','Post')

@section('content')
<form action="" method="" enctype="">

    <div class="form-group">
        <label for="judul">Post</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">

        <small class="text-danger"></small>

    </div>
    <div class="form-group">
        <label for="sampul">Sampul</label>
        <input type="file" class="form-control" id="sampul" name="sampul">

        <small class="text-danger"></small>

    </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select class="form-control" id="kategori" name="kategori">
            <option selected disabled>Pilih Katgeori</option>

            <option value="">{</option>

        </select>

        <small class="text-danger"></small>

    </div>
    <div class="form-group">
        <label for="tag">Tag</label>
        <select multiple class="form-control" id="tag" name="tag[]">

            <option value=""></option>

        </select>

        <small class="text-danger"></small>

    </div>
    <div class="form-group">
        <label for="editor">Konten</label>
        <textarea class="form-control" id="editor" rows="10" name="konten"></textarea>

        <small class="text-danger"></small>

    </div>
    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
    <a href="/post" class="btn btn-secondary btn-sm">Kembali</a>
</form>
@endsection