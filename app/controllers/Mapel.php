<?php
class Mapel extends Controller
{
    public function index()
    {
        $data['judul'] = "Mata Pelajaran";
        $data['mapel'] = $this->model('Mapel_model')->getALLmapel();
        $this->view('partials/head');
        $this->view('partials/topbar');
        $this->view('partials/sidebar');
        $this->view('mapel/index',$data);
        $this->view('partials/footer');
    }
}
