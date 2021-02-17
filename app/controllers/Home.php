<?php 

class Home extends Controller{
    public function index(){

       $data['judul'] = "administrator";
       $this->view('partials/head',);
       $this->view('partials/topbar',);
       $this->view('partials/sidebar',);
       $this->view('home/index',$data);
       $this->view('partials/footer',);
    }

}