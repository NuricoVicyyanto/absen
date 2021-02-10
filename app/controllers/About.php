<?php 

class About extends Controller {
    public function index(){
     $data['judul'] = "Data Siswa";
     $data['mhs'] = $this->model('Mahasiswa_model')->getALLmahasiswa();
     $this->view('partials/head');
     $this->view('partials/topbar');
     $this->view('partials/sidebar');
     $this->view('about/index',$data);
     $this->view('partials/footer');
     
    }
}