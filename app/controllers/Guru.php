<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Guru";
        $data['guru'] = $this->model('Guru_model')->getAllguru();
        $data['mapel'] = $this->model('Mapel_model')->getAllmapel();
        $this->view('partials/head');
        $this->view('partials/topbar');
        $this->view('partials/sidebar',$data);
        $this->view('guru/index',$data);
        $this->view('partials/footer');
    }
    public function ($id)
    {
        $data['detail_guru'] = $this->model('Guru_model')->getGuruByid();
        $this->view('partials/head');
        $this->view('partials/topbar');
        $this->view('guru/index',$data);
        $this->view('partials/footer');
    }
    public function tambahData()
    {
        // var_dump($_POST);
        // cek mapel
        $mapel = $_POST['mapel'];
        // cek foto
        $allowed = array('jpeg', 'jpg', 'png'); 
        $filename = $_FILES['foto']['name'];
        $ext = pathinfo($filename,PATHINFO_EXTENSION);
        if ($mapel == null) {
            // menampilkan alert jika ada kesalahan
            Flash::setFlash('Gagal Pilih','Pilihlah salah satu Mapel', 'warning');
            header('Location: ' . base . 'guru');
            exit;
        }else{
            if (!in_array($ext, $allowed)) {
                // menampilkan alert jika ada kesalahan
                FLash::setFlash('Gagal Upload','Ekstensi Harus jpg, jpeg dan png','warning');
                header('Location: ' . base . 'guru');
                exit;
            }else{
                if ($this->model('Guru_model')->tambahGuru($_POST) > 0) {
                    // menampilkan alert jika berhasil
                    Flash::setFlash('Berhasil','Data Guru ditambahkan' ,'success');
                    header('Location: ' . base . 'guru');
                    exit;                 
                }else{
                    FLash::setFlash('Gagal','Terdapat kesalahan','danger');
                    header('Location: ' . base . 'guru');
                    exit;
                }
            }
        }
    }
}
