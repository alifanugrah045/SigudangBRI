<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Pegawai</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Pegawai</li>
      </ol>

      <!-- card data -->
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

              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahDatamodal">Tambah Data</button>

              <!-- Modal tambah -->
              <div class="modal fade" id="tambahDatamodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header " style="background: #013161;">
                      <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                    </div>
                    <form method="post" action="<?php echo base_url('C_pegawai/tambahuser') ?>">
                      <div class="modal-body ">
                        <fieldset>
                          <div class="mb-3">
                            <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                            <input type="hidden" class="form-control" name="id_pegawai" required />
                            <input type="text" class="form-control" name="nama_pegawai" id="recipient-name" required />
                          </div>
                        </fieldset>
                        <div class="mb-3">
                          <label for="nip_pegawai" class="col-form-label">NIP</label>
                          <input type="text" class="form-control" name="nip_pegawai" id="recipient-name" required />
                        </div>
                        <div class="mb-3">
                          <label for="jabatan_pegawai" class="col-form-label">Jabatan</label>
                          <input type="text" class="form-control" name="jabatan_pegawai" id="recipient-name" required />
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
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
                <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($pegawai as $no => $pgw) : ?>
                <tr>
                  <td scope="row"><?php echo ($no + 1); ?></td>
                  <td><?php echo $pgw->nama_pegawai ?></td>
                  <td><?php echo $pgw->nip_pegawai ?></td>
                  <td><?php echo $pgw->jabatan_pegawai ?></td>
                  <td class="d-flex justify-content-center">
                    <a href="<?php echo $pgw->id_pegawai ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdatapegawai<?= $pgw->id_pegawai; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>

                    <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdatapegawai<?= $pgw->id_pegawai; ?>" ><i class="bi bi-trash-fill iconku me-1"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <!-- modal edit data -->
          <!-- Modal -->
          <?php foreach ($pegawai as $pgw) : ?>
          <div class="modal fade" id="editdatapegawai<?= $pgw->id_pegawai; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header " style="background: #013161;">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                </div>
                <div class="modal-body ">

                  <form method="post" action="<?php echo base_url('C_pegawai/editUser') ?>">              
                      <div class="mb-3">
                        <label for="nama_pegawai" class="col-form-label">Nama Pegawai</label>
                        <input type="hidden" name="id_pegawai" value="<?php echo $pgw->id_pegawai; ?>" required>
                        <input type="text" value="<?php echo $pgw->nama_pegawai; ?>" name="nama_pegawai" class="form-control"  required />
                      </div>
                    <div class="mb-3">
                      <label for="nip_pegawai" class="col-form-label">NIP</label>
                      <input type="text" value="<?php echo $pgw->nip_pegawai; ?>" name="nip_pegawai" class="form-control" id="recipient-name" required />
                    </div>
                    <div class="mb-3">
                      <label for="jabatan_pegawai" class="col-form-label">Jabatan</label>
                      <input type="text" value="<?php echo $pgw->jabatan_pegawai; ?>" name="jabatan_pegawai" class="form-control" id="recipient-name" required />
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit"  class="btn btn-primary"  data-bs-dismiss="modal">Simpan</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- end modal -->

          <!-- end modal edit -->

        </div>
      </div>
      <!-- akhir card data -->


       <!-- modal hapus data -->
       <?php foreach ($pegawai as $pgw) : ?>
        <div class="modal fade" id="hapusdatapegawai<?= $pgw->id_pegawai; ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url('C_pegawai/hapusdatauser/') . $pgw->id_pegawai; ?>" class="btn btn-danger text-white">Iya</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- end modal hapus -->


    </div>
</div>
</div>
</main>
</div>
</div>