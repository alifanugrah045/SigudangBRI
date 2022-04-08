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
                  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal3">Tambah Data</button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <th scope="col">Foto</th>
                    <th scope="col" width="250px">Aksi</th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach($barang as $no => $brg): ?>
                    
                    <tr>
                      <td scope="row"><?php echo ($no + 1); ?></td>
                      <td><?php echo $brg->username ?></td>
                      <td><?php echo $brg->password ?></td>
                      <td width="250px" class="d-flex justify-content-center">
                        <a class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#exampleModaledit"><i class="bi bi-pencil-square iconku me-1"></i>Edit</a>
                        <a class="btn btn-danger btnku ms-1" onclick="return confirm('Apakah kamu yakin akan menghapus data?')" href="user.php"><i class="bi bi-trash-fill iconku me-1"></i>Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                    
                  <?php endforeach; ?>
                </tbody>
              </table>
                    <!-- modal edit data -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header " style="background: #013161;">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                          </div>
                          <div class="modal-body ">
                            
                              <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="">
                                <fieldset>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Username</label>
                                    <input type="text" class="form-control" value="" name="user_name" id="recipient-name" required />
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
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end modal -->

            </div>
          </div>
        </div>
    </div>
  </div>
  </main>
  </div>
  </div>