<?php 

class Kelas extends Controller {
    public function index(){
        $data['judul'] = "Data Kelas";
        $this->view('partials/head');
        $this->view('partials/topbar');
        $this->view('partials/sidebar');
        $this->view('kelas/index',$data);
        $this->view('partials/footer');
    
    }
}