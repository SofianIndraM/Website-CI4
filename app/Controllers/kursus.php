<?php

namespace App\Controllers;

use App\Models\jadwalModel;

class Kursus extends BaseController
{
    public function __construct()
    {
        $this->jadwalModel = new jadwalModel();
    }
    public function index()
    {
        // $jadwal = $this->jadwalModel->findAll();

        $data = [
            'title' => 'Home | Web Kursus JWP',
            'status_index' => 'active',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => '',
            'jadwal' => $this->jadwalModel->getJadwal()
        ];

        return view('kursus/index',$data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Home | Web Kursus JWP',
            'status_index' => 'active',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => '',
            'jadwal' => $this->jadwalModel->getJadwal($id)
        ];

        return view('kursus/detail',$data);
    }
}
