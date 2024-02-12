@extends('layouts.admin')

@section('title', 'Data Produk')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">


@section('header', 'Produk')

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

  <div class="card shadow mb-4">
    <div class="card-header text-center py-3">
      <h6 class="m-0 font-weight-bold"><i class="fa fa-table me-1"></i> Data Produk</h6>
     
    </div>
    <div class="card-body">
      <a href="{{ route('produk.tambah') }}" class="btn btn-dark mb-3">Tambah Produk</a>
      <div class="card-body">
        <table id="produkTable">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Produk</th>
              <th>Nama Produk</th>
              <th>Bahan</th>
              <th>Harga</th>
              <th>Foto</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Bahan</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
          </tfoot>
          
          <tbody>
            @php($no = 1)
            @foreach ($produk as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_produk }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->bahan }}</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->foto }}</td>
                <td>{{ $row->kategori->nama_kategori }}</td>
                <td>
                  <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>  Edit</a>
                  <a href="{{ route('produk.hapus', $row->id) }}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
            $('#produkTable').DataTable();
        });
</script>
@endsection