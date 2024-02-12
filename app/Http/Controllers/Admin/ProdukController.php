<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
	{
		$produk = Produk::get();

		return view('produk.index', ['produk' => $produk]);

		
	}

	public function tambah()
	{
		$kategori = Kategori::all();

        return view('produk.form', compact('kategori'));
	}

	public function simpan(Request $request)
	{
		$kategori = Kategori::all();

        Produk::create(['kode_produk' => $request->kode_produk,
		'nama_produk' => $request->nama_produk,
		'bahan' => $request->bahan,
		'harga' => $request->harga,
        'foto' => $data['foto'] ?? '',
		'id_kategori' => $request->id_kategori,
    ]);

		return redirect()->route('produk');
	}

	public function edit($id)
	{
		$produk = Produk::find($id)->first();

		return view('produk.form', ['produk' => $produk]);
	}

	public function update($id, Request $request)
	{
		Produk::find($id)->update(['kode_produk' => $request->kode_produk,
		'nama_produk' => $request->nama_produk,
		'bahan' => $request->bahan,
		'harga' => $request->harga,
        'foto' => $data['foto'] ?? '',
		'id_kategori' => $request->id_kategori]);

		return redirect()->route('produk');
	}

	public function hapus($id)
	{
		Produk::find($id)->delete();

		return redirect()->route('produk');
	}
}

