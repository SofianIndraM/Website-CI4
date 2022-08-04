<?php

namespace App\Controllers;

use App\Models\jadwalModel;
class admin extends BaseController
{
    public function __construct()
    {
        $this->jadwalModel = new jadwalModel();
    }
    public function admin()
    {
        $data = [
            'title' => 'Daftar Kursus | Web Kursus JWP',
            'status_index' => '',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => 'active',
            'jadwal' => $this->jadwalModel->getJadwal()
        ];

        return view('admin/admin',$data);
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Kursus | Web Kursus JWP',
            'status_index' => 'active',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => '',
            'jadwal' => $this->jadwalModel->getJadwal($id)
        ];

        return view('admin/detail',$data);
    }
    public function create()
    {
        $data = [
            'title' => 'Buat Jadwal | Web Kursus JWP',
            'status_index' => 'active',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => '',
            'jadwal' => $this->jadwalModel->getJadwal()
        ];

        return view('admin/create',$data);
    }

    public function save()
    {
        $this->jadwalModel->save([
            'nama_kursus' => $this->request->getVar('nama_kursus'),
            'ket_kursus' => $this->request->getVar('ket_kursus'),
            'lama_kursus' => $this->request->getVar('lama_kursus'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/admin');
    }
    public function delete($id){
        $this->jadwalModel->delete($id);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Buat Jadwal | Web Kursus JWP',
            'status_index' => 'active',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => '',
            'jadwal' => $this->jadwalModel->getJadwal($id)
        ];
        return view('admin/edit',$data);

    }

    public function update($id){
        $this->jadwalModel->save([
            'id' => $id,
            'nama_kursus' => $this->request->getVar('nama_kursus'),
            'ket_kursus' => $this->request->getVar('ket_kursus'),
            'lama_kursus' => $this->request->getVar('lama_kursus'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

        return redirect()->to('/admin');
    }

}
