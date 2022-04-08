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
            <a class="nav-link" href="pegawai.php">
              <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
              Data Pegawai
            </a>
            <a class="nav-link active" href="user.php">
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
          <h1 class="mt-4">Data Users</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelola Users</li>
          </ol>
          <div class="card shadow-sm">
            <h5 class="card-header">
              <i class="bi bi-truck"></i>
              Data Users
            </h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <!-- modal -->
                  <!-- Button trigger modal -->
                  <?php
                  if (isset($_POST["simpan"])) {
                    $user_name = $_POST['user_name'];
                    $password_user = md5($_POST['password_user']);

                    $query = mysqli_query($koneksi, "INSERT INTO tb_user (id_user, user_name, password_user) VALUES (NULL, '$user_name', '$password_user')");
                    if ($query) {
                      echo "
                      <script>
                          alert('Berhasil Menyimpan Data!');
                          window.location.href = 'user.php';
                      </script>";
                    } else {
                      echo "
                      <script>
                      alert('Gagal Menyimpan Data!');
                      window.location.href = 'user.php';
                      </script>";
                    }
                  }
                  if (isset($_POST["update"])) {
                    $id_user = $_POST['id_user'];
                    $user_name = $_POST['user_name'];
                    $password_user = md5($_POST['password_user']);

                    $query = mysqli_query($koneksi, "UPDATE tb_user SET user_name = '$user_name', password_user = '$password_user' WHERE id_user = '$id_user'");
                    if ($query) {
                      echo "
                      <script>
                        alert('Berhasil Mengupdate Data!');
                        window.location.href = 'user.php';
                      </script>";
                    } else {
                      echo "
                        <script>
                        alert('Gagal Mengupdate Data!');
                        window.location.href = 'user.php';
                        </script>";
                    }
                  }

                  if (isset($_GET['aksi']) == 'delete') {
                    echo 'hapus';
                    $id_user = $_GET['id'];
                    $query = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id_user'");
                    if ($query) {
                      echo "
                      <script>
                        alert('Berhasil Menghapus Data!');
                        window.location.href = 'user.php';
                      </script>";
                    } else {
                      echo "
                        <script>
                        alert('Gagal Menghapus Data!');
                        window.location.href = 'user.php';
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
                        <div class="modal-body ">
                          <form method="POST" action="" enctype="multipart/form-data">
                            <fieldset>
                              <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Username</label>
                                <input type="text" class="form-control" name="user_name" id="recipient-name" required />
                              </div>
                            </fieldset>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Password</label>
                              <input type="text" class="form-control" name="password_user" id="recipient-name" required />
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" name="simpan" class="btn btn-primary" value="Simpan" data-bs-dismiss="modal">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end modal -->

                  <!-- akhir modal edit -->
                </div>
              </div>

              <table class="table table-hover table-borderless table-striped " id="datatablesSimple">


                <thead class="text-light " style="background: #013161;">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col" width="250px">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_user");
                  $no = 1;
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td scope="row"><?php echo $no; ?></td>
                      <td><?php echo $row['user_name']; ?></td>
                      <td>Tidak Ditampilkan</td>
                      <td width="250px" class="d-flex justify-content-center">
                        <a class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#exampleModaledit<?php echo $row['id_user']; ?>"><i class="bi bi-pencil-square iconku me-1"></i>Edit</a>
                        <a class="btn btn-danger btnku ms-1" onclick="return confirm('Apakah kamu yakin akan menghapus data?')" href="user.php?aksi=delete&id=<?php echo $row['id_user']; ?>"><i class="bi bi-trash-fill iconku me-1"></i>Hapus</a>
                      </td>
                    </tr>
                    <!-- modal edit data -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModaledit<?php echo $row['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header " style="background: #013161;">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                          </div>
                          <div class="modal-body ">
                            <?php
                            $id = $row['id_user'];
                            $query_view = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id'");
                            while ($data = mysqli_fetch_array($query_view)) {
                            ?>
                              <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                                <fieldset>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username</label>
                                    <input type="text" class="form-control" value="<?php echo $data['user_name']; ?>" name="user_name" id="recipient-name" required />
                                  </div>
                                </fieldset>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Password</label>
                                  <input type="text" class="form-control" name="password_user" id="recipient-name" />
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
    <div class="container-fluid px-5">
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

  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>

  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
</body>

</html>

<!-- public function index()
    {
        $this->form_validation->set_rules('username','Username','trim|required',['required' => 'Username Wajib Diisi']);
        $this->form_validation->set_rules('password','Password','trim|required',['required' => 'Password Wajib Diisi']);
        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        }else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        // ambil email yang sudah lolos validasi
        $username = set_value('username');
        $password = set_value('password');

        // query ke database
        $result = $this->db->get_where('tb_user',['username' => $username])->row_array();
                           
        
        // cek data
        // usernya ada
        if ($result['username'] == $username && $result['password'] == $password ) {
            // cek password
            $this->session->set_userdata($result);
            $this->load->view('v_header');
        $this->load->view('v_menu');
        $this->load->view('v_dashboard');
        $this->load->view('v_footer');
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Email atau password salah!
          </div>');
          redirect('auth');
        }
    } -->