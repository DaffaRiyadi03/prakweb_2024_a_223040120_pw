<?php
class About extends Controller
{
    public function index(
        $nama = 'Muhammad Daffa Riyadi',
        $umur = '21',
        $pekerjaan = 'Pengangguran Terselubung'

    ) {
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'My Pages';
        $this->view('templates/header', $data);
        $this->view('about/Page');
        $this->view('templates/footer');
    }
}
?>