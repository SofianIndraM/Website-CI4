<?php

namespace App\Controllers;

use App\Models\jadwalModel;

class Pages extends BaseController
{
    public function __construct()
    {
        $this->jadwalModel = new jadwalModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | Web Kursus JWP',
            'status_index' => 'active',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => ''
        ];

        return view('kursus/index',$data);
    }

    public function jadwal()
    {
        $data = [
            'title' => 'Jadwal Kursus | Web Kursus JWP',
            'status_index' => '',
            'status_jadwal' => 'active',
            'status_about' => '',
            'status_daftar' => '',
            'status_admin' => ''
        ];

        return view('pages/jadwal',$data);
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami | Web Kursus JWP',
            'status_index' => '',
            'status_jadwal' => '',
            'status_about' => 'active',
            'status_daftar' => '',
            'status_admin' => ''
        ];

        return view('pages/about',$data);
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar Kursus | Web Kursus JWP',
            'status_index' => '',
            'status_jadwal' => '',
            'status_about' => '',
            'status_daftar' => 'active',
            'status_admin' => ''
        ];

        return view('pages/daftar',$data);
    }
}
