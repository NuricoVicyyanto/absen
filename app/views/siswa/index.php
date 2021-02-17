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
                    <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</button>
                    </div>
                    <table id="datapengguna" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto Siswa</th>
                                <th>Nama Lengkap</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                        <td>1</td>
                                        <td>tes.jpg</td>
                                        <td>nama</td>
                                        <td>kelas</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a type="button" class="btn btn-info" data-toggle="edit-kiri" data-placement="left" title="Detail data" ><i class="fas fa-info"></i></a>
                                                <a type="button" class="btn btn-warning"  data-toggle="edit-bawah" data-placement="bottom" title="Edit data" ><i class="fas fa-edit"></i></a>
                                                <a type="button" class="btn btn-danger" data-toggle="edit-atas" data-placement="right" title="Hapus data"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                               </tr>
                        </tbody>
                    </table>
                </div>
            </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
  <!-- /#wrapper -->
