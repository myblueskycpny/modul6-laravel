@extends('sb-admin/app')
@section('title','Post')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Post</h1>
<a href="/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Post</a>

<table class="table mt-4 table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tag</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
</table>
@endsection