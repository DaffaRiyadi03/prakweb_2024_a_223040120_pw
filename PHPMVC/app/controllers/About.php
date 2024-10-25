<?php
class About
{
    public function index(
        $nama = 'Muhammad Daffa Riyadi',
        $pekerjaan = 'Pengangguran Terselubung'
    ) {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/Page';
    }
}
?>