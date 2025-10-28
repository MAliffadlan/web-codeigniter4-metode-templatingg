<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'activePage' => 'home'
        ];
        return view('pages/view_home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About',
            'activePage' => 'about'
        ];
        return view('pages/view_about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'activePage' => 'contact'
        ];
        return view('pages/view_contact', $data);
    }
    public function profile()
    {
        $profile_data = [
            'Nama' => 'Alif Fadlan',
            'NIM' => '240444150007',
            'Jurusan' => 'Manajemen Informatika',
            'Keahlian' => 'HTML, CSS, PHP, CodeIgniter'
        ];
        $data = [
            'title' => 'Profile',
            'activePage' => 'profile',
            'profil' => $profile_data 
        ];
        return view('pages/view_profile', $data);
    }
    public function saveContact()
    {
        $nama = $this->request->getPost('nama_lengkap');
        $email = $this->request->getPost('email_pengirim');
        $pesan = $this->request->getPost('pesan_user');
        echo "<h1>Data Berhasil Diterima!</h1>";
        echo "<p>Halo, <strong>" . esc($nama) . "</strong>!</p>";
        echo "<p>Email kamu: <strong>" . esc($email) . "</strong></p>";
        echo "<p>Pesan kamu: <br>" . esc($pesan) . "</p>";
        echo "<br><a href='/contact'>&laquo; Kembali ke Form</a>";
    }
}