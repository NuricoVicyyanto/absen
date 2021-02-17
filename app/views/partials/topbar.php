    
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom bg-light">Absensi Siswa</div>
      <div class="list-group list-group-flush ">
        <div class="list-group-item ">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                  <img src="<?=base?>public/img/user.jpg" alt="" class="img-thumbnail w-50 " >
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center admin">
                  <div class="btn-group dropright">
                    <a type="button" class="dropdown-toggle admin-a" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Administrator
                    </a>
                    <div class="dropdown-menu" x-placement="right-start" style="position: absolute; transform: translate3d(111px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                      <a class="dropdown-item" href="#">Setting</a>
                      <a class="dropdown-item" href="#">Ganti Password</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center admin-span">
                    <span><i class="fas fa-circle" id="admin-i"></i>Rifjan Jundila</span>
                </div>
            </div>
          </div>
        </div>
        <a href="<?=base?>home" class="list-group-item list-group-item-action"><i class="fas fa-tachometer-alt mr-2 dash"></i>Dashboard</a>
        <a href="<?=base?>" class="list-group-item list-group-item-action"><i class="far fa-clock mr-2 absensi"></i>Absensi</a>
        <a href="<?=base?>pengguna" class="list-group-item list-group-item-action"><i class="fas fa-users mr-2 pengguna"></i>Pengguna</a>
        <a href="<?=base?>siswa" class="list-group-item list-group-item-action"><i class="fas fa-user-graduate mr-2 siswa"></i> Data Siswa</a>
        <a href="<?=base?>guru" class="list-group-item list-group-item-action"><i class="far fa-user mr-2 guru"></i> Data Guru</a>
        <a href="<?=base?>kelas" class="list-group-item list-group-item-action"><i class="fas fa-graduation-cap mr-2 kelas"></i>Data Kelas</a>
        <a href="<?=base?>mapel" class="list-group-item list-group-item-action"><i class="fas fa-book mr-2 mapel"></i>Data Mapel</a>
        <a href="<?=base?>" class="list-group-item list-group-item-action"><i class="fas fa-clipboard-list mr-2 laporan"></i>Laporan</a>
        <!-- <a class="list-group-item list-group-item-action"  data-toggle="collapse" data-target="#demo">Siswa</a>
        <div id="demo" class="collapse">
          <a href="#" class="list-group-item list-group-item-action">Data Siswa</a>
          <a href="#" class="list-group-item list-group-item-action">Data Kelas</a>
        </div> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
