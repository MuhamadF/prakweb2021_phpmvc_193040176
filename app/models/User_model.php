<?php

class User_model {
    private $nama = 'Muhamad F';
    // private $pekerjaan = 'Mahasiswa';
    // private $umur = 21;

    public function getUser() {
        return $this->nama;
    }
}