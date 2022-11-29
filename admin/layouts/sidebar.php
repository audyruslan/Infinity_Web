  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">
      <?php
        if (!empty($_SESSION["username"])) {
            $id_jabatan = $admin["jabatan"];
            $query = mysqli_query($conn, "SELECT * FROM tb_jabatan WHERE id = '$id_jabatan'");
            $jabatan = mysqli_fetch_assoc($query);
        ?>
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="../dist/img/logo.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><?= $jabatan["nama_jabatan"]; ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->

          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="profile.php" class="d-block"><?= $admin["nama_lengkap"]; ?></a>
              </div>
          </div>
          <?php } ?>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                      <a href="index.php" class="nav-link active">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="file_manager.php" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              File Manager
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Master Kinerja
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="karyawan.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>To Do List</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="event_bulanan.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Event Bulanan</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Master karyawan
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="jabatan.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Posisi/Jabatan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="karyawan.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Karyawan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="absensi.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Absensi Karyawan</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon far fa-calendar-alt"></i>
                          <p>
                              Master Laporan
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="laporan_kpi.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>
                                      Laporan KPI
                                  </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="laporan_harian.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Rutinitas Harian</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="laporan_mingguan.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Laporan Mingguan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="laporan_bulanan.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Laporan Bulanan</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-header">All Setting</li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-laptop-code"></i>
                          <p>
                              Landing Page
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="home_landing.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Home Landing</p>
                              </a>
                          </li>
                          <!-- <li class="nav-item">
                              <a href="project_design.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Design</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="project_konstruksi.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Konstruksi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="project_kerjasama.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Kerjasama</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="project_jualbeli.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Project Jual Beli</p>
                              </a>
                          </li> -->
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Pengaturan
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="profile.php" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Akun</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="logout.php" class="nav-link">
                          <i class="nav-icon fas fa-sign-out-alt"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>