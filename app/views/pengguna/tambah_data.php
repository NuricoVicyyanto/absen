<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item li-dash"><i class="fas fa-tachometer-alt m-1"></i><a href="<?=base?>">Dashboard</a></li>
                        <li class="breadcrumb-item li-dash"></i><a href="<?=base?>pengguna/">Pengguna</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$data['judul']?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-12">
                <div class="shadow-sm p-3 mb-5 bg-white rounded card">
                    <div class="row">
                        <div class="col-lg-12">
                        <p>Tambah Pengguna</p>
                        <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-11" >
                                        <form method="post" action="<?=base?>pengguna/tambah">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Foto Pengguna</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                <span class="badge badge-info">Ekstensi JPG | JPEG | PNG</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="user" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" id="user" name="user">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="pass" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="pass" name="pass">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="lihat">
                                                        <label class="form-check-label" for="defaultCheck1" id="lihat">
                                                        Lihat Password
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="user" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status">
                                                        <option value="0" disabled>Super Admin</option>
                                                        <option value="1" >Admin</option>
                                                    </select>
                                                    <small id="emailHelp" class="form-text text-muted">Untuk mengganti hak akses hubungi SuperAdmin</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10 offset-sm-2">
                                                <button type="submit" class="btn btn-outline-danger">Batal</button>
                                                <button type="submit" class="btn btn-success">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
  <!-- /#wrapper -->
