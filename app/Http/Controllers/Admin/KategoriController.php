<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
	{
		$kategori = Kategori::get();

		return view('kategori.index', ['kategori' => $kategori]);

		
	}

	public function tambah()
	{
		return view('kategori.form');
	}

	public function simpan(Request $request)
	{
		Kategori::create(['nama_kategori' => $request->nama_kategori]);

		return redirect()->route('kategori');
	}

	public function edit($id)
	{
		$kategori = Kategori::find($id)->first();

		return view('kategori.form', ['kategori' => $kategori]);
	}

	public function update($id, Request $request)
	{
		Kategori::find($id)->update(['nama_kategori' => $request->nama_kategori]);

		return redirect()->route('kategori');
	}

	public function hapus($id)
	{
		Kategori::find($id)->delete();

		return redirect()->route('kategori');
	}
}
