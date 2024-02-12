<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

	protected $table = 'produk';

	protected $fillable = ['kode_produk', 'nama_produk', 'bahan', 'harga', 'foto', 'id_kategori'];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
