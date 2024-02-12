@extends('layouts.admin')

@section('title', 'Form Produk')

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
  <form action="{{ isset($produk) ? route('produk.tambah.update', $produk->id) : route('produk.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">{{ isset($produk) ? 'Form Edit Produk' : 'Form Tambah Produk' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_produk">Kode Produk</label>
              <input type="text" class="form-control" id="kode_produk" name="kode_produk" value="{{ isset($produk) ? $produk->kode_produk : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ isset($produk) ? $produk->nama_produk : '' }}">
            </div>
            <div class="form-group">
              <label for="bahan">Bahan</label>
              <input type="text" class="form-control" id="bahan" name="bahan" value="{{ isset($produk) ? $produk->bahan : '' }}">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga" value="{{ isset($produk) ? $produk->harga : '' }}">
            </div>
            <div class="form-group">
                <label for="foto">Foto Produk</label>
                <input type="file" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori Produk</label>
                    <select name="id_kategori" id="id_kategori" class="custom-select">
                        <option value="" selected disabled hidden>-- Pilih Nama Kategori--</option>
                        @foreach($kategori as $row)
                        <option value="{{ $row->id }}" {{ isset($produk) ? ($produk->id_kategori == $row->id ? 'selected' : '' ) : '' }}>{{ $row->nama_kategori }}</option>
                        @endforeach
                    </select>
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
