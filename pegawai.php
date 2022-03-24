<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
  <!-- icon -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/mycss.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark shadow-sm">

    <!-- Navbar Brand-->
    <!-- logo -->
    <a class="navbar-brand   align-items-centerps-3" href="index.php">
      <img src="logo.png" class=" navbar-brand rounded align-items-center ms-5" style="width: 100px; height: 60px;" alt="logo">
    </a>
    <!-- akhir logo -->

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 ms-2 " id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: #757774;"></i></button>
    <!-- Navbar Search-->

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-2">
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw" style="color: #757774;"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#!">Settings</a></li>
          <li><a class="dropdown-item" href="#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="login.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- navbar end -->

  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" style="background: #013161;" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Menu</div>
            <a class="nav-link" href="databarangmasuk.php">
              <div class="sb-nav-link-icon"><i class="bi bi-reply"></i></div>
              Data Barang Masuk
            </a>
            <a class="nav-link" href="barangkeluar.php">
              <div class="sb-nav-link-icon"><i class="bi bi-box-seam"></i></div>
              Data Barang Keluar
            </a>
            <a class="nav-link active" href="pegawai.php">
              <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
              Data Pegawai
            </a>

            <a class="nav-link" href="user.php">
              <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
              Kelola Users
            </a>

          </div>
        </div>
        <div class="sb-sidenav-footer " style="background: #013161;">
          <div class="small">Logged in as:</div>
          Admin
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Data Pegawai</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Pegawai</li>
          </ol>
          <div class="card shadow-sm">
            <h5 class="card-header">
              <i class="bi bi-truck"></i>
              Data Pegawai
            </h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <!-- modal -->
                  <!-- Button trigger modal -->
                  <?php
                  if (isset($_POST["simpan"])) {
                    $nama_pegawai = $_POST['nama_pegawai'];
                    $nip_pegawai = $_POST['nip_pegawai'];
                    $jabatan_pegawai = $_POST['jabatan_pegawai'];

                    $query = mysqli_query($koneksi, "INSERT INTO tb_data_pegawai (id_pegawai, nama_pegawai, nip_pegawai, jabatan_pegawai) VALUES (NULL, '$nama_pegawai', '$nip_pegawai', '$jabatan_pegawai')");
                    if ($query) {
                      echo "
                      <script>
                          alert('Berhasil Menyimpan Data!');
                          window.location.href = 'pegawai.php';
                      </script>";
                    } else {
                      echo "
                      <script>
                      alert('Gagal Menyimpan Data!');
                      window.location.href = 'pegawai.php';
                      </script>";
                    }
                  }
                  if (isset($_POST["update"])) {
                    $id_pegawai = $_POST['id_pegawai'];
                    $nama_pegawai = $_POST['nama_pegawai'];
                    $nip_pegawai = $_POST['nip_pegawai'];
                    $jabatan_pegawai = $_POST['jabatan_pegawai'];

                    $query = mysqli_query($koneksi, "UPDATE tb_data_pegawai SET nip_pegawai = '$nip_pegawai', nama_pegawai = '$nama_pegawai', jabatan_pegawai = '$jabatan_pegawai' WHERE id_pegawai = '$id_pegawai'");
                    if ($query) {
                      echo "
                      <script>
                        alert('Berhasil Mengupdate Data!');
                        window.location.href = 'pegawai.php';
                      </script>";
                    } else {
                        echo "
                        <script>
                        alert('Gagal Mengupdate Data!');
                        window.location.href = 'pegawai.php';
                        </script>";
                    }
                  }

                  if(isset($_GET['aksi']) == 'delete') {
                    echo 'hapus';
                    $id_pegawai = $_GET['id'];
                    $query = mysqli_query($koneksi, "DELETE FROM tb_data_pegawai WHERE id_pegawai = '$id_pegawai'");
                    if ($query) {
                      echo "
                      <script>
                        alert('Berhasil Menghapus Data!');
                        window.location.href = 'pegawai.php';
                      </script>";
                    } else {
                        echo "
                        <script>
                        alert('Gagal Menghapus Data!');
                        window.location.href = 'pegawai.php';
                        </script>";
                    }
                  }
                  ?>
                  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header " style="background: #013161;">
                          <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                        </div>
                        <form method="POST" action="" enctype="multipart/form-data">
                          <div class="modal-body ">
                            <fieldset>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Pegawai</label>
                                <input type="text" class="form-control" name="nama_pegawai" id="recipient-name" required/>
                              </div>
                            </fieldset>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">NIP</label>
                              <input type="text" class="form-control" name="nip_pegawai" id="recipient-name" required/>
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Jabatan</label>
                              <input type="text" class="form-control" name="jabatan_pegawai" id="recipient-name" required/>
                            </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="simpan" class="btn btn-primary" value="Simpan" data-bs-dismiss="modal">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- end modal -->
                </div>

              </div>

              <table class="table table-hover table-borderless table-striped" id="datatablesSimple">



                <thead class="text-light " style="background: #013161;">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col" width="250px">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_data_pegawai");
                  $no = 1;
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td scope="row"><?php echo $no; ?></td>
                      <td><?php echo $row['nama_pegawai']; ?></td>
                      <td><?php echo $row['nip_pegawai']; ?></td>
                      <td><?php echo $row['jabatan_pegawai']; ?></td>
                      <td width="250px" class="d-flex justify-content-center">
                        <a class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editData<?php echo $row['id_pegawai']; ?>"><i class="bi bi-pencil-square iconku me-1"></i>Edit</a>
                        <a class="btn btn-danger btnku ms-1" onclick="return confirm('Apakah kamu yakin akan menghapus data?')" href="pegawai.php?aksi=delete&id=<?php echo $row['id_pegawai']; ?>"><i class="bi bi-trash-fill iconku me-1"></i>Hapus</a>
                      </td>
                    </tr>


                    <!-- modal edit data -->
                    <!-- Modal -->
                    <div class="modal fade" id="editData<?php echo $row['id_pegawai']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header " style="background: #013161;">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                          </div>
                          <div class="modal-body ">
                            <?php
                            $id = $row['id_pegawai'];
                            $query_view = mysqli_query($koneksi, "SELECT * FROM tb_data_pegawai WHERE id_pegawai='$id'");
                            while ($data = mysqli_fetch_array($query_view)) {
                            ?>
                              <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
                                <fieldset>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Pegawai</label>
                                    <input type="text" value="<?php echo $data['nama_pegawai']; ?>" name="nama_pegawai" class="form-control" id="recipient-name" required/>
                                  </div>
                                </fieldset>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">NIP</label>
                                  <input type="text" value="<?php echo $data['nip_pegawai']; ?>" name="nip_pegawai" class="form-control" id="recipient-name" required/>
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Jabatan</label>
                                  <input type="text" value="<?php echo $data['jabatan_pegawai']; ?>" name="jabatan_pegawai" class="form-control" id="recipient-name" required/>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <input type="submit" name="update" class="btn btn-primary" value="Update" data-bs-dismiss="modal">
                                </div>
                              </form>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end modal -->

                    <!-- end modal edit -->
                  <?php $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
  </main>

  <footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
      <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; Your Website 2021</div>
        <div>
          <a href="#">Privacy Policy</a>
          &middot;
          <a href="#">Terms &amp; Conditions</a>
        </div>
      </div>
    </div>
  </footer>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>