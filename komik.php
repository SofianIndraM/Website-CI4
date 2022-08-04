<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $KomikModel;
    public function __construct(){
        $this->KomikModel = new KomikModel();
    }
    
    public function index()
    {
        // $komik = $this->KomikModel->findAll();
        $data = [
            'title' => 'Daftar Komik | Web Programming Unpas',
            'komik' => $this->KomikModel->getKomik()
        ];


        return view('komik/index',$data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik | Web Programming UNPAS',
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        
        return view('komik/detail',$data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Komik | Web Programming UNPAS',
            'validation' => \Config\Services::validation()
        ];

        return view('komik/create',$data);

    }

    public function save(){

        //Validasi Input
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah terdaftar.'
                ],
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/create')->withInput()->with('validation',$validation);
        }

        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->KomikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/komik');
    }

    public function delete($id){
        $this->KomikModel->delete($id);
        return redirect()->to('/komik');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Komik | Web Programming UNPAS',
            'validation' => \Config\Services::validation(),
            'komik' => $this->KomikModel->getKomik($slug)
        ];

        return view('komik/edit',$data);

    }

    public function update($id){
        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->KomikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

        return redirect()->to('/komik');
    }
    
}
