<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item li-dash"><i class="fas fa-tachometer-alt m-1"></i><a href="<?=base?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$data['judul']?></li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-12">
                <div class="shadow p-3 mb-4 bg-white rounded">
                    <div class="pb-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahGuru"><i class="fas fa-plus"></i> Tambah Data</button>
                    </div>
                    <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Foto</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1; 
                                foreach ($data['guru'] as $x ): ?>
                                <?php
                                    if ($x == 0) {
                                       echo "Data Tidak ada";
                                    }else {
                                        ?>
                                            <tr>
                                                <td><?=$x['nip'];?></td>
                                                <td><?=$x['foto_guru']?></td>
                                                <td><?=$x['nama_lengkap']?></td>
                                                <td><?=$x['email']?></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a type="button" class="btn btn-info" data-toggle="edit-kiri" data-placement="left" title="Detail data" ><i class="fas fa-info"></i></a>
                                                        <a type="button" class="btn btn-warning"  data-toggle="edit-bawah" data-placement="bottom" title="Edit data" ><i class="fas fa-edit"></i></a>
                                                        <a type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
  <!-- /#wrapper -->
  <!-- Tambah Guru -->
  <div class="modal fade bd-example-modal-lg" id="tambahGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-dialog-scrollable ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="">
            <div class="modal-body">
              <div class="form-group row">
                <label for="foto" class="col-sm-3 col-form-label">Foto Guru</label>
                <div class="col-sm-9">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="nis" class="col-sm-3 col-form-label">NIP Guru</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="nip" name="nip">
                  <small id="nis" class="form-text text-muted">Jumlah NIP harus berjumlah 16 karakter.</small>                    
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" name="nama">
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="user" name="user">
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="pass" name="pass">
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">NO HP/WA</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="nohp" name="nohp">
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">ALamat Guru</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
              </div>
              <div class="form-group row">
                <label for="kelas" class="col-sm-3 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-9">
                  <select class="selectpicker form-control" data-live-search="true" id="mapel" name="mapel"> 
                    <?php
                        foreach ($data['mapel'] as $x) :?>
                          <option data-tokens="<?=$x['mt_pelajaran']?>" value="<?=?>"><?=$x['mt_pelajaran']?></option>
                    <?php endforeach; ?>  
                  </select>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end tambah guru -->