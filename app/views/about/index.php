<div class="container-fluid mt-4">
        <div class="row">
          <div class="col-lg-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-12">
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="accordion" id="accordionExample">
                    <?php foreach ($data['mhs'] as $x) :?>
                    <div class="card">
                        <div class="card-header" id="headingThree<?=$x['id']?>">
                          <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree<?=$x['id']?>" aria-expanded="false" aria-controls="collapseThree">
                               <?=$x['nm_mhs']?>
                              </button>
                          </h2>
                        </div>
                        <div id="collapseThree<?=$x['id']?>" class="collapse" aria-labelledby="headingThree<?=$x['id']?>" data-parent="#accordionExample">
                          <div class="card-body">
                              <p><?=$x['alamat']?></p>
                              <p><?=$x['kelas']?></p>
                          </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
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
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      $no = 1;
                      foreach ($data['mhs'] as $x) :?>
                        <tr>
                          <th><?=$no++;?></th>
                          <th scope="row"><?=$x['nm_mhs']?></th>
                          <td><?=$x['alamat']?></td>
                          <td><?=$x['kelas']?></td>
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