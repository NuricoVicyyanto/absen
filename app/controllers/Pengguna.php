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
        public function tambah()
        {
            $data['judul'] = "Tambah Pengguna";
            $this->view('partials/head');
            $this->view('partials/topbar');
            $this->view('partials/sidebar');
            $this->view('pengguna/tambah_data',$data);
            $this->view('partials/footer');
        }
        public function tambahData()
        {
            $allowed = array('jpeg', 'jpg', 'png');
            $filename = $_FILES['foto']['name'];
            $ext = pathinfo($filename,PATHINFO_EXTENSION);
            if (!in_array($ext, $allowed)) {
              FLash::setFlash('Gagal Upload','Ekstensi Harus jpg, jpeg dan png','warning');
              header('Location: ' . base . 'pengguna');
            }else{
                if($this->model('Users_model')->tambahPengguna($_POST) > 0 ){
                  FLash::setFlash('Berhasil','Data Pengguna Ditambahkan','success');
                  header('Location: ' . base . 'pengguna');
                  exit;
                }else{
                  FLash::setFlash('Gagal','Terdapat Kesalahan','danger');
                  header('Location: ' . base . 'pengguna');
                  exit;     
                }
            }
        }
        // public function detail($id)
        // {
        //     $data['detail'] = $this->model('Users_model')->getUserByid($id);
        //     $this->view('pengguna/detail',$data);
        // }
    }
    
?>