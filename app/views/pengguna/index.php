<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
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
                                <th>Foto</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1; 
                                foreach ($data['user'] as $x ): ?>
                                <?php
                                    if ($x == 0) {
                                       echo "Data Tidak ada";
                                    }else {
                                        ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$x['foto_user']?></td>
                                                <td><?=$x['username']?></td>
                                                <td><?=$x['nama_lengkap']?></td>
                                                <td>
                                                    <a href="" data-toggle="tooltip" data-placement="left" title="Edit data" ><i class="fas fa-edit text-warning"></i></a>
                                                    <a href="" data-toggle="tooltip" data-placement="top" title="Hapus data" ><i class="fas fa-trash-alt text-danger"></i></a>
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
