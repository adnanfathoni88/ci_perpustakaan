<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Illuminate\Support\Collection;


class DashboardController extends BaseController
{
    public function index()
    {
        $_SERVER['navAktif'] = 'dashboard';
        return view('dashboard/index');
    }
    function admin()
    {
        $_SERVER['navAktif'] = 'admin';
        return view('dashboard/admin/index');
    }
    function anggota()
    {
        $_SERVER['navAktif'] = 'anggota';
        return view('dashboard/anggota/index');
    }
    // function buku()
    // {
    //     $_SERVER['navAktif'] = 'buku';
    //     return view('dashboard/buku/index');
    // }

    function kategori()
    {
        $_SERVER['navAktif'] = 'kategori';
        return view('dashboard/kategori/index');
    }
    function peminjaman()
    {
        $_SERVER['navAktif'] = 'peminjaman';
        return view('dashboard/peminjaman/index');
    }
    function pengembalian()
    {
        $_SERVER['navAktif'] = 'pengembalian';
        return view('dashboard/pengembalian/index');
    }
}
