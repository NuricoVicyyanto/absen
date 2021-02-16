<?php
    class Pengguna extends Controller
    {
        public function index()
        {
            $data["judul"] = "Data Pengguna";
            $this->view('partials/head');
            $this->view('partials/topbar');
            $this->view('partials/sidebar');
            $this->view('pengguna/index',$data);
            $this->view('partials/footer');
        }
    }
    
?>