<?php

class About {
    public function index($nama = 'Fawwazt', $pekerjaan = 'Mahasiswa') {
        echo "Hallo saya $nama, saya seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}