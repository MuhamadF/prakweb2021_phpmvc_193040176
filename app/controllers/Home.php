<?php

class Home extends Controller {
    public function index() {

      $data['judul'] = 'Home';
      $data['nama'] = $this->model('User_model')->getUser();
      $data['pekerjaan'] = "Mahasiswa";
      $data['umur'] = 21;

      $this->view('templates/header', $data);
      $this->view('home/index', $data);
      $this->view('templates/footer');
    }
}