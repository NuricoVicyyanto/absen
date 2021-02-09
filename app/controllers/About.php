<?php 

class About extends Controller {
    public function index(){
     
     $this->view('partials/head');
     $this->view('partials/topbar');
     $this->view('partials/sidebar');
     $this->view('about/index');
     $this->view('partials/footer');
     
    }
}