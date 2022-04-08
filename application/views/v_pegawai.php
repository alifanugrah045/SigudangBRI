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
                 <?php foreach ($barang as $no => $brg): ?>
                    <tr>
                      <td scope="row"><?php echo ($no + 1); ?></td>
                      <td><?php echo $brg->nama_pegawai ?></td>
                      <td><?php echo $brg->nip_pegawai ?></td>
                      <td><?php echo $brg->jabatan_pegawai ?></td>
                      <td width="250px" class="d-flex justify-content-center">
                        <a class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editData"><i class="bi bi-pencil-square iconku me-1"></i>Edit</a>
                        <a class="btn btn-danger btnku ms-1" onclick="return confirm('Apakah kamu yakin akan menghapus data?')" href="pegawai.php"><i class="bi bi-trash-fill iconku me-1"></i>Hapus</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>   
                </tbody>
              </table>

               <!-- modal edit data -->
                    <!-- Modal -->
                    <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header " style="background: #013161;">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                          </div>
                          <div class="modal-body ">
                            
                              <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id_pegawai" value="">
                                <fieldset>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Pegawai</label>
                                    <input type="text" value="" name="nama_pegawai" class="form-control" id="recipient-name" required/>
                                  </div>
                                </fieldset>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">NIP</label>
                                  <input type="text" value="" name="nip_pegawai" class="form-control" id="recipient-name" required/>
                                </div>
                                <div class="mb-3">
                                  <label for="message-text" class="col-form-label">Jabatan</label>
                                  <input type="text" value="" name="jabatan_pegawai" class="form-control" id="recipient-name" required/>
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

                    <!-- end modal edit -->

            </div>
          </div>
        </div>
    </div>
  </div>
  </main>
  </div>
  </div>