<?php

namespace App\Controllers;
use App\Models\Buku;


use App\Controllers\BaseController;

class BukuController extends BaseController
{
    public function index()
    {
        $_SERVER['navAktif'] = 'buku';

        $bukuModel = new Buku();
        $data['buku'] = $bukuModel->findAll();
        
        return view('dashboard/buku/index', $data);
    }
    public function create()
    {
        return view('dashboard/buku/form-buku');
    }
    public function store()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'jumlah_halaman' => 'required|numeric',
            'sinopsis' => 'required'
        ]);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $buku = new Buku();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun'),
            'jumlah_halaman' => $this->request->getVar('jumlah'),
            'sinopsis' => $this->request->getVar('sinopsis')
        ];
    
        $buku->insert($data);

        return redirect()->to('dashboard/buku')->with('success', 'Data buku berhasil disimpan.');
    }

    public function edit($id)
    {
        $buku = new Buku();
        $data['buku'] = $buku->find($id); 

        return view('dashboard/buku/edit-buku', $data);
    }
}
