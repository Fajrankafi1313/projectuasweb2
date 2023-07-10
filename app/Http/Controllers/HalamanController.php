<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index()
    {
        return view ("halaman/index");
    }
    function tentang()
    {
        return view ("halaman/tentang");
    }
    function kontak()
    {
        return view ("halaman/kontak");
    }
    function kriteria()
    {
        return view ("admin/kriteria");
    }
    function produk()
    {
        return view ("admin/produk");
    }
    function hitung()
    {
        return view ("admin/hitung");
    }
}
