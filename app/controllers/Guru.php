<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Guru";
        $data['guru'] = $this->model('Guru_model')->getALLguru();
        $this->view('partials/head');
        $this->view('partials/topbar');
        $this->view('partials/sidebar',$data);
        $this->view('guru/index',$data);
        $this->view('partials/footer');
    }
}
