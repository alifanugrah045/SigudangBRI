
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Data Barang Masuk</h1>
          <ol class="breadcrumb mb-4 bg-light">
            <li class="breadcrumb-item text-decoration-none"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Barang Masuk</li>
          </ol>
          <div class="card shadow-sm">
            <h5 class="card-header">
              <i class="bi bi-truck"></i>
              Data Barang Masuk
            </h5>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 d-flex">
                  <!-- modal -->
                  <!-- Button trigger modal -->
                  <div class="input-group mb-3">
                    <button type="button" class="btn btn-primary rounded btnmodal border-0 btn-primaryku" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
                    <button class="btn btn-success rounded border-0 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                      <i class="bi bi-printer me-2">
                      </i>Cetak Data</button>
                  </div>


                  <!-- Modal -->


                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header " style="background: #013161;">
                          <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="" enctype="multipart/form-data">
                            <input type="hidden" id="countData" name="count" value="1">
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Nama Pegawai</label>
                              <select class="form-control" name="id_pegawai" required>
                                <option value="" disabled selected hidden>-- Pilih Pegawai --</option>
                               
                                  <option value="">nama pegawai</option>
                               
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Supplier</label>
                              <select class="form-control" name="id_supplier" required>
                                <option value="" disabled selected hidden>-- Pilih Supplier --</option>
                               
                                  <option value="">barang</option>
                                
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Tanggal Masuk</label>
                              <input type="date" name="tgl_barang_masuk" class="form-control" placeholder="Tanggal Barang Masuk" />
                            </div>

                            <div class="row">
                              <div class="col-md-12">

                                <label for="message-text" class="col-form-label">Nama Barang</label>
                                <div class="form-group fieldGroup mb-3">
                                  <div class="input-group">
                                    <select class="form-control" name="id_barang[]" id="inputGroupSelect01" required>
                                      <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                      
                                        <option value="">barang</option>
                                     
                                    </select>
                                    <input type="number" name="jmlh_barang[]" class="form-control" min="0" placeholder="Masukan Jumlah Barang" />
                                    <div class="input-group-addon ml-3">
                                      <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group fieldGroupCopy" style="display: none;">
                                  <div class="input-group mt-3">
                                    <select class="form-control " name="id_barang[]" id="inputGroupSelect01" name="username1[]">
                                      <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                     
                                        <option value=""></option>
                                      
                                    </select>
                                    <input type="number" name="jmlh_barang[]" class="form-control" min="0" placeholder="Masukan Jumlah Barang" />

                                    <div class="input-group-addon ml-3">
                                      <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>




                  <!-- end modal -->

                  <!-- modal cetak data -->
                  <!-- Modal -->



                  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header bg-success">
                          <h5 class="modal-title text-white" id="exampleModalLabel">Cetak Data</h5>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="cetakMasuk.php" target="_blank" enctype="multipart/form-data">
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Supplier</label>
                              <select class="form-control" name="id_supplier" required>
                                <option value="" disabled selected hidden>-- Pilih Supplier --</option>
                               
                                  <option value=""></option>
                               
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">From</label>
                              <input type="date" name="tanggal_awal" class="form-control" id="recipient-name" required />
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">To</label>
                              <input type="date" name="tanggal_akhir" class="form-control" id="recipient-name" required />
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <input type="submit" name="simpan" class="btn btn-primary" value="Cetak Semua Data">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end modal -->
                  <!-- akhir modal cetak data -->
                </div>
              </div>
              <!-- table data -->
              
              <table class="table " id="datatablesSimple">
                <thead class="border-0 text-white" style="background: #013161;">
                
                  <th scope="col">No</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Supplier</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Harga Satuan</th>
                  <th scope="col" width="300px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($barang as $no => $brg): ?>
                  <tr>
                    <td scope="row"><?php echo ($no + 1); ?></td>
                    <td><?php echo $brg->tanggal_masuk ?></td>
                    <td><?php echo $brg->nama_supplier ?></td>
                    <td><?php echo $brg->jumlah_masuk ?></td>
                    <td><?php echo $brg->harga_barang ?></td>
                  <td width="300px" class="d-flex justify-content-center">
                        <a class="btn btn-primary btnku btnedit" data-bs-toggle="modal" data-bs-target="#editData"><i class="bi bi-pencil-square iconku me-1"></i>Edit</a>
                        <a class="btn btn-danger btnku ms-1" onclick="return confirm('Apakah kamu yakin akan menghapus data?')" href="databarangmasuk.php"><i class="bi bi-trash-fill iconku me-1"></i>Hapus</a>
                        <a class="btn bg-success btnku ms-1" target="_blank" href="cetak.php"><i class="bi bi-printer iconku me-1"></i>Cetak</a>
                      </td>
                      
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              
              <!-- akhir table -->

              <!-- modal -->
              <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header " style="background: #013161;">
                              <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                            </div>
                            <div class="modal-body">
                              
                                <form method="POST" action="" enctype="multipart/form-data">
                                  <input type="hidden" name="id_masuk" value="">
                                  <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Nama Pegawai</label>
                                    <select class="form-control" name="id_pegawai" required>
                                      <option value="<?php echo $data['id_pegawai']; ?>" selected></option>
                                      
                                        <option value=""></option>
                                      
                                    </select>
                                  </div>

                                  <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Supplier</label>
                                    <select class="form-control" name="id_supplier" required>
                                      <option value="" selected></option>
                                      
                                        <option value=""></option>
                                      
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Tanggal Masuk</label>
                                    <input type="date" value="" name="tgl_barang_masuk" class="form-control" placeholder="Tanggal Barang Masuk" />
                                  </div>

                                  <div class="row">
                                    <div class="col-md-12">
                                      <label for="message-text" class="col-form-label">Nama Barang</label>
                                      <div class="form-group-1 fieldGroup1 mb-3">
                                        <div class="input-group">
                                          <select class="form-control" name="id_barang" id="inputGroupSelect01" required>
                                            <option value="" selected></option>
                                            
                                              <option value=""></option>
                                           
                                          </select>
                                          <input type="number" value="" name="jmlh_barang" class="form-control" placeholder="Masukan Jumlah Barang" />
                                        </div>
                                      </div>
                                    </div>
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
              <!-- akhir modal -->
            </div>
          </div>
        </div>
    </div>
  </div>
  </main>

  
  </div>
  </div>

  