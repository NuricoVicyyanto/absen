<?php
class Mapel extends Controller
{
    public function index()
    {
        $data['judul'] = "Mata Pelajaran";
        $this->view('partials/head');
        $this->view('partials/topbar');
        $this->view('partials/sidebar');
        $this->view('mapel/index',$data);
        $this->view('partials/footer');
    }
}
