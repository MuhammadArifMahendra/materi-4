<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
	function index(){
			return view('produk.index');
	}
	function create(){
			return view('produk.create');
	}
	function store(){
			$produk = new Produk;
			$produk->nama = request('nama');
			$produk->stok = request('stock');
			$produk->harga = request('harga');
			$produk->berat = request('berat');
			$produk->deskripsi = request('deskripsi');
			$produk->save();

			return redirect('produk');
	}
	function show(){

	}
	function edit(){

	}
	function update(){

	}
	function destroy(){

	}
}