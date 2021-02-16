<div class="container-fluid mt-4">
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-12">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="table">
                    <table class="table" id="example">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach ($data['guru'] as $x) :?>
                        <tr>
                          <th><?=$no++;?></th>
                          <th scope="row"><?=$x['nama']?></th>
                          <td><?=$x['mt_pelajaran']?></td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->