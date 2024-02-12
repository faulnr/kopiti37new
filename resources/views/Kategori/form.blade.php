@extends('layouts.admin')

@section('title', 'Form Kategori')

@section('content')
<head>
  <style>
    .card-header {
      background: chocolate;
      border: 1px solid chocolate;
      color: #fff;
    }
  </style>
</head>
<body>
  <form action="{{ isset($kategori) ? route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">{{ isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama_kategori">Nama Kategori</label>
              <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ isset($kategori) ? $kategori->nama_kategori : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-dark">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
@endsection
