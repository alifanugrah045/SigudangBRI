<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Barang Keluar</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item text-decoration-none"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Barang Keluar</li>
      </ol>
      <!-- card -->
      <div class="card shadow-sm ">
        <h5 class="card-header">
          <i class="bi bi-truck"></i>
          Data Barang Keluar
        </h5>

        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <!-- modal -->
              <!-- Button trigger modal -->

              <div class="input-group mb-3">
                <button type="button" class="btn btn-primary rounded btnmodal" data-bs-toggle="modal" data-bs-target="#TambahData">Tambah Data</button>
                <button type="button" class="btn btn-success rounded ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal2"> <i class="bi bi-printer me-2">
                  </i>Cetak Data</button>
              </div>
              <!-- Modal -->


              <div class="modal fade" id="TambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header " style="background: #013161;">
                      <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?= base_url('C_barang_keluar/tambahData') ?>" enctype="multipart/form-data">
                        <input type="number" hidden id="countData" name="id_keluar">
                        <div class="mb-3">
                          <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                          <select class="form-control" name="nama_pegawai" required>
                            <option value="" disabled selected hidden>-- Pilih Pegawai --</option>
                            <?php foreach ($pegawai->result() as $brg) : ?>
                              <option value="<?= $brg->id_pegawai; ?>"> <?= $brg->nama_pegawai; ?> </option>
                            <?php endforeach; ?>
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="nama_unit" class="col-form-label">Unit Tujuan</label>
                          <select class="form-control" name="nama_unit" required>
                            <option value="" disabled selected hidden>-- Pilih Unit --</option>
                            <?php foreach ($unit->result() as $brg) : ?>
                              <option value="<?= $brg->nama_unit; ?>"> <?= $brg->nama_unit; ?> </option>
                            <?php endforeach; ?>
                          </select>
                        </div>

                        <div class="mb-3">
                          <input type="date" hidden name="tgl_barang_keluar" class="form-control" placeholder="Tanggal Barang Keluar" />
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <label for="nama_barang" class="col-form-label">Nama Barang</label>
                            <div class="form-group fieldGroup mb-3">
                              <div class="input-group">
                                <select class="form-control" name="nama_barang" id="inputGroupSelect01" required>
                                  <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                  <?php foreach ($barang->result() as $brg) : ?>
                                    <option value="<?= $brg->id_barang; ?>"> <?= $brg->nama_barang; ?> </option>
                                  <?php endforeach; ?>
                                </select>
                                <!-- <div class="input-group-addon ml-3">
                                  <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                </div> -->
                              </div>
                            </div>

                            <div class="form-group fieldGroupCopy" style="display: none;">
                              <div class="input-group mt-3">
                                <select class="form-control " name="nama_barang" id="inputGroupSelect01" name="username1[]">
                                  <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                  <?php foreach ($barang->result() as $brg) : ?>
                                    <option value="<?= $brg->id_barang; ?>"> <?= $brg->nama_barang; ?> </option>
                                  <?php endforeach; ?>
                                </select>
                                <div class="input-group-addon ml-3">
                                  <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="jumlah_keluar">Jumlah</label>
                          <input type="number" name="jumlah_keluar" class="form-control" min="0" placeholder="Masukan Jumlah Barang" />
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" name="simpan" class="btn btn-primary" value="Simpan">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>




              <!-- modal edit data -->

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
                      <form method="post" action="<?= base_url('C_barang_keluar/cetaklaporan'); ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="dari" class="col-form-label">Dari</label>
                          <input type="date" name="dari" class="form-control" id="dari" required />
                        </div>
                        <div class="mb-3">
                          <label for="sampai" class="col-form-label">Sampai</label>
                          <input type="date" name="sampai" class="form-control" id="sampai" required />
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" name="simpan" class="btn btn-success" value="Cetak Semua Data">Cetak Laporan</button>
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
          <table class="table table-borderless " id="datatablesSimple">
            <thead class="text-light" style="background: #013161;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Unit Tujuan</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Pegawai</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php foreach ($keluar as $no => $klr) : ?>
                <tr>
                  <td scope="row"><?php echo ($no + 1); ?></td>
                  <td><?php echo $klr->tanggal_keluar ?></td>
                  <td><?php echo $klr->nama_unit ?></td>
                  <td><?php echo $klr->nama_barang ?></td>
                  <td><?php echo $klr->jumlah_keluar ?></td>
                  <td><?php echo $klr->nama_pegawai ?></td>
                  <td><?php echo $klr->harga_barang ?></td>
                  <td  class="d-flex justify-content-center">
                    <a href="<?php echo $klr->id_keluar; ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdDataBarang<?= $klr->id_keluar; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>
                    <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdatabarang<?= $klr->id_keluar; ?>"><i class="bi bi-trash-fill iconku me-1"></i></a>
                   
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- akhir table -->

          <!-- modal edit data -->
          <?php foreach ($keluar as $klr) : ?>
            <div class="modal fade" id="editdDataBarang<?= $klr->id_keluar; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header" style="background: #013161;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                  </div>
                  <div class="modal-body">

                    <form method="post" action="<?= base_url('C_barang_keluar/editUser') ?>" enctype="multipart/form-data">
                      <input type="hidden" name="id_keluar" value="<?= $klr->id_keluar; ?>">

                      <div class="mb-3">
                        <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                        <select class="form-control" name="nama_pegawai" required>
                          <option value="" disabled selected hidden>-- Pilih Pegawai --</option>
                          <?php foreach ($pegawai->result() as $brg) : ?>
                            <option value="<?= $brg->id_pegawai; ?>" <?= $brg->id_pegawai == $klr->id_pegawai ? "selected" : null ?>> <?= $brg->nama_pegawai; ?> </option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label for="nama_unit" class="col-form-label">Unit Tujuan</label>
                        <select class="form-control" name="nama_unit" required>
                          <option value="" disabled selected hidden>-- Pilih Unit --</option>
                          <?php foreach ($unit->result() as $brg) : ?>
                            <option value="<?= $brg->nama_unit; ?>" <?= $brg->nama_unit == $klr->nama_unit ? "selected" : null ?>> <?= $brg->nama_unit; ?> </option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label for="nama_barang" class="col-form-label">Nama Barang</label>
                          <div class="form-group fieldGroup mb-3">
                            <div class="input-group">
                              <select class="form-control" name="nama_barang" id="inputGroupSelect01" required>
                                <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                <?php foreach ($barang->result() as $brg) : ?>
                                  <option value="<?= $brg->id_barang; ?>" <?= $brg->id_barang == $klr->id_barang ? "selected" : null ?>> <?= $brg->nama_barang; ?> </option>
                                <?php endforeach; ?>
                              </select>
                              <div class="input-group-addon ml-3">
                                <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                              </div>
                            </div>
                          </div>

                          <!-- <div class="form-group fieldGroupCopy" style="display: none;">
                            <div class="input-group mt-3">
                              <select class="form-control " name="nama_barang" id="inputGroupSelect01" name="username1[]">
                                <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                <?php foreach ($barang->result() as $brg) : ?>
                                  <option value="<?= $brg->id_barang; ?>" <?= $brg->id_barang == $klr->id_barang ? "selected" : null ?>> <?= $brg->nama_barang; ?> </option>
                                <?php endforeach; ?>
                              </select>
                              <div class="input-group-addon ml-3">
                                <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="jumlah_keluar"></label>
                        <input type="number" value="<?= $klr->jumlah_keluar; ?>" name="jumlah_keluar" class="form-control" min="0" placeholder="Masukan Jumlah Barang" />
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary" value="Update" data-bs-dismiss="modal">Simpan</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- end edit -->

          <!-- hapus data modal -->
          <?php foreach ($keluar as $klr) : ?>
            <div class="modal fade" id="hapusdatabarang<?= $klr->id_keluar; ?>" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a type="submit" href="<?= base_url('C_barang_keluar/hapusdatauser/') . $klr->id_keluar; ?>" class="btn btn-danger text-white">Iya</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- end -->

        </div>
      </div>
    </div>
</div>
</div>
</main>





</div>
</div>