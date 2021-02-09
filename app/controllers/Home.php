<?php 

class Home extends Controller{
    public function index(){

       $data['judul'] = "administrator";
       $data['nama'] = $this->model('User_model')->getUser();
       $this->view('partials/head',$data);
       $this->view('partials/topbar',$data);
       $this->view('partials/sidebar',$data);
       $this->view('home/index',$data);
       $this->view('partials/footer',$data);
    }

}