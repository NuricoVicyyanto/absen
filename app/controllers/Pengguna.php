<?php
    class Pengguna extends Controller
    {
        public function index()
        {
            $data["judul"] = "Data Pengguna";
            $data['user'] = $this->model('Users_model')->getUser();
            // $data['detail-user'] = $this->model('Users_model')->getUserByid();
            $this->view('partials/head');
            $this->view('partials/topbar');
            $this->view('partials/sidebar');
            $this->view('pengguna/index',$data);
            $this->view('partials/footer');
        }
        // public function detail($id)
        // {
        //     $data['detail'] = $this->model('Users_model')->getUserByid($id);
        //     $this->view('pengguna/detail',$data);
        // }
    }
    
?>