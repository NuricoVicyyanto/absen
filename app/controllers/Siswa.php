<?php 

class Siswa extends Controller {
    public function index(){
     $data['judul'] = "Data Siswa";
     $data['siswa'] = $this->model('Siswa_model')->getALLsiswa();
     $this->view('partials/head');
     $this->view('partials/topbar');
     $this->view('partials/sidebar');
     $this->view('siswa/index',$data);
     $this->view('partials/footer');
    
    }
    public function tambahData()
    {
        $allowed = array('jpeg', 'jpg','png');
        $filename = $_FILES['foto']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed )) {
            # code...
        }
    }
}