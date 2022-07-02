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
                <button type="button" class="btn btn-primary rounded btnmodal border-0 btn-primaryku" data-bs-toggle="modal" data-bs-target="#TambahData1">Tambah Data</button>
                <button class="btn btn-success rounded border-0 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                  <i class="bi bi-printer me-2">
                  </i>Cetak Data</button>
              </div>

              <!-- Modal -->

              <div class="modal fade" id="TambahData1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header " style="background: #013161;">
                      <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?= base_url('C_barang_masuk/tambahData') ?>" enctype="multipart/form-data">
                        <input type="number" hidden id="countData" name="id_masuk">
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
                          <label for="nama_suplier" class="col-form-label">Nama Suplier</label>
                          <select class="form-control" name="nama_suplier" required>
                            <option value="" disabled selected hidden>-- Pilih Unit --</option>
                            <?php foreach ($suplier->result() as $brg) : ?>
                              <option value="<?= $brg->nama_suplier; ?>"> <?= $brg->nama_suplier; ?> </option>
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
                                  <?php foreach ($barang1->result() as $brg) : ?>
                                    <option value="<?= $brg->id_barang; ?>"> <?= $brg->nama_barang; ?> </option>
                                  <?php endforeach; ?>
                                </select>
                                <!-- <div class="input-group-addon ml-3">
                                  <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                                </div> -->
                              </div>
                            </div>

                            <!-- <div class="form-group fieldGroupCopy" style="display: none;">
                              <div class="input-group mt-3">
                                <select class="form-control " name="nama_barang" id="inputGroupSelect01" name="username1[]">
                                  <option value="" disabled selected hidden>-- Pilih Barang --</option>
                                  <?php foreach ($barang1->result() as $brg) : ?>
                                    <option value="<?= $brg->id_barang; ?>"> <?= $brg->nama_barang; ?> </option>
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
                          <label for="jumlah"></label>
                          <input type="number" name="jumlah" class="form-control" min="0" placeholder="Masukan Jumlah Barang" required />
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
                      <form method="post" action="<?= base_url('C_barang_masuk/cetaklaporan'); ?>" enctype="multipart/form-data">
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

          <table class="table " id="datatablesSimple">
            <thead class="border-0 text-white" style="background: #013161;">

              <th scope="col">No</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Supplier</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga</th>
              <th scope="col">Pegawai</th>
              <th scope="col" >Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($barang as $msk) : ?>
                <tr>
                  <td width="50px" scope="row"><?= $no++; ?></td>
                  <td><?php echo $msk->tanggal_masuk ?></td>
                  <td><?php echo $msk->nama_suplier ?></td>
                  <td><?php echo $msk->nama_barang ?></td>
                  <td><?php echo $msk->jumlah ?></td>
                  <td><?php echo $msk->harga_barang ?></td>
                  <td><?php echo $msk->nama_pegawai ?></td>
                  <td class="d-flex ">
                    <a href="<?php echo $msk->id_masuk; ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdDataBarang<?= $msk->id_masuk; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>
                    <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdatabarang<?= $msk->id_masuk; ?>"><i class="bi bi-trash-fill iconku me-1"></i></a>
                    <!-- <a class="btn bg-success btnku ms-1" target="_blank" href="cetak.php"><i class="bi bi-printer iconku me-1"></i></a> -->
                  </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <!-- akhir table -->

          <!-- modal edit data -->
          <?php foreach ($barang as $msk) : ?>
            <div class="modal fade" id="editdDataBarang<?= $msk->id_masuk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header " style="background: #013161;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                  </div>
                  <div class="modal-body ">

                    <form method="post" action="<?= base_url('C_barang_masuk/editUser') ?>">
                      <div class="mb-3">
                        <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                        <select class="form-control" name="nama_pegawai" required>
                          <option value="" disabled selected hidden>-- Pilih Pegawai --</option>
                          <?php foreach ($pegawai->result() as $brg) : ?>
                            <option value="<?= $brg->id_pegawai; ?>" <?= $brg->id_pegawai == $msk->id_pegawai ? "selected" : null ?>> <?= $brg->nama_pegawai; ?> </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Supplier</label>
                        <select class="form-control" name="nama_suplier" required>
                          <option value="" disabled selected hidden>-- Pilih Suplier --</option>
                          <?php foreach ($suplier->result() as $brg) : ?>
                            <option value="<?= $brg->nama_suplier; ?>" <?= $brg->nama_suplier == $msk->nama_suplier ? "selected" : null ?>><?= $brg->nama_suplier; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Nama Barang</label>
                        <div class="form-group fieldGroup mb-3">
                          <div class="input-group">
                            <select class="form-control" name="nama_barang" id="inputGroupSelect01" required>
                              <option value="" disabled selected hidden>-- Pilih Barang --</option>
                              <?php foreach ($barang1->result() as $brg) : ?>
                                <option value="<?= $brg->id_barang; ?>" <?= $brg->id_barang == $msk->id_barang ? "selected" : null ?>> <?= $brg->nama_barang; ?> </option>
                              <?php endforeach; ?>
                            </select>
                            <!-- <div class="input-group-addon ml-3">
                              <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fas fa-plus"></i></a>
                            </div> -->
                          </div>
                        </div>

                        <!-- <div class="form-group fieldGroupCopy" style="display: none;">
                          <div class="input-group mt-3">
                            <select class="form-control" name="nama_barang" id="inputGroupSelect01">
                              <option value="" disabled selected hidden>-- Pilih Barang --</option>
                              <?php foreach ($barang1->result() as $brg) : ?>
                                <option value="<?= $brg->id_barang; ?>" <?= $brg->id_barang == $msk->id_barang ? "selected" : null ?>> <?= $brg->nama_barang; ?> </option>
                              <?php endforeach; ?>
                            </select>

                            <div class="input-group-addon ml-3">
                              <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i></a>
                            </div>
                          </div>
                        </div> -->
                      </div>
                      <div class="mb-3">
                        <label for="jumlah" class="col-form-label">Jumlah Barang</label>
                        <input type="number" value="<?= $msk->jumlah; ?>" name="jumlah" class="form-control"  placeholder="Masukan Jumlah Barang" />
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- akhir modal -->

          <!-- hapus data modal -->
          <?php foreach ($barang as $msk) : ?>
            <div class="modal fade" id="hapusdatabarang<?= $msk->id_masuk; ?>" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a type="submit" href="<?= base_url('C_barang_masuk/hapusdatauser/') . $msk->id_masuk; ?>" class="btn btn-danger text-white">Iya</a>
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