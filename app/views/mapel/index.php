<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item li-dash"><i class="fas fa-tachometer-alt m-1"></i><a href="<?=base?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-book m-1"></i><?=$data['judul']?></li>
        </ol>
      </nav>
    </div>

    <div class="col-lg-12">
      <div class="shadow p-3 mb-4 bg-white rounded">
        <div class="pb-3">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_mapel"><i
              class="fas fa-plus"></i> Tambah Data</button>

        </div>

        <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <?php
            $no = 1;
             foreach ($data['mapel'] as $x ): ?>
          <?php
             if ($x == 0) {
                 echo "Data Tidak ada";
             }else {
          ?>
          <tr>
            <td><?=$no++;?></td>
            <td><?=$x['mt_pelajaran']?></td>
            <td><?=$x['created_at']?></td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                <a type="button" class="btn btn-info" data-placement="left" title="Detail data" data-toggle="modal"
                  data-target="#detail"><i class="fas fa-info"></i>
                </a>
                <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Mata Pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a type="button" class="btn btn-warning" data-placement="bottom" data-toggle="modal" data-target="#edit"
                  title="Edit data"><i class="fas fa-edit"></i>
                </a>
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <a type="button" class="btn btn-danger" data-placement="right" data-toggle="modal" data-target="#hapus"
                  title="Hapus data"><i class="fas fa-trash-alt"></i>
                </a>
                <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Mata pelajaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Apakah anda yakin akan menghapus mata pelajaran ini?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-danger">Iya hapus</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <?php
                                    }
                                ?>
          <?php endforeach; ?>

        </table>

      </div>
    </div>
  </div>
</div>
<!-- /#page-content-wrapper -->

<!-- modal dari tambah data -->
<form method="post">
  <div class="modal fade" id="tambah_mapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?=base?>mapel/tambah" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="formGroupExampleInput">Nama Mata Pelajaran</label>
              <input type="text" class="form-control" id="mt_pelajaran" name="mt_pelajaran" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            <td><input type="submit" name="submit" value="TAMBAH" class="btn btn-success"></td>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
</div>
<!-- /#wrapper -->