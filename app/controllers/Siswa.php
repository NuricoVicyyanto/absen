<?php 

class Siswa extends Controller {
    public function index(){
     $this->view('partials/head');
     $this->view('partials/topbar');
     $this->view('partials/sidebar');
     $this->view('siswa/index');
     $this->view('partials/footer');
    
    }
}