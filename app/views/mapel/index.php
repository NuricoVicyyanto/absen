    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-book m-1"></i>Data
                Mata Pelajaran</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-12">
          <div class="shadow p-3 mb-5 bg-white rounded">
            <nav class="navbar navbar-light bg-white">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </nav>
            <tbody>
              <div class="col-lg-12">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <div class="table">
                    <table class="table" id="example">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Mata Pelajaran</th>
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
                        <td><?=$x['username']?></td>
                        <td><?=$x['nama_lengkap']?></td>
                        <td>
                          <a href="" data-toggle="tooltip" data-placement="left" title="Edit data"><i
                              class="fas fa-edit text-warning"></i></a>
                          <a href="" data-toggle="tooltip" data-placement="top" title="Hapus data"><i
                              class="fas fa-trash-alt text-danger"></i></a>
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
    </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->