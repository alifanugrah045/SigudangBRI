<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Unit</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Unit</li>
      </ol>

      <!-- data users card -->
      <div class="card shadow-sm">
        <h5 class="card-header">
          <i class="bi bi-truck"></i>
          Data Unit
        </h5>

        <div class="card-body">
          <div class="row">
            <div class="col-md-6">

              <!-- modal -->
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modaltambahdataunit">Tambah Data</button>

              <!-- Modal -->
              <div class="modal fade" id="modaltambahdataunit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header " style="background: #013161;">
                      <h5 class="modal-title text-white" id="exampleModalLabel">Tambah Data</h5>
                    </div>
                    <div class="modal-body ">
                      <form method="post" action="<?php echo base_url('C_unit/tambahuser') ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="nama_unit" class="col-form-label">Nama Unit</label>
                          <input type="hidden" class="form-control" name="id_unit" required />
                          <input type="text" class="form-control" name="nama_unit" id="recipient-name" required />
                        </div>
                        <div class="mb-3">
                          <label for="alamat_unit" class="col-form-label">Alamat Unit</label>
                          <input type="text" class="form-control" name="alamat_unit" id="recipient-name" required />
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal -->

            </div>
          </div>

          <table class="table table-hover table-borderless table-striped " id="datatablesSimple">


            <thead class="text-light " style="background: #013161;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Unit</th>
                <th scope="col">Alamat Unit</th>
                <th scope="col" >Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($unit as $no => $unt) : ?>

                <tr>
                  <td scope="row"><?php echo ($no + 1); ?></td>
                  <td><?php echo $unt->nama_unit ?></td>
                  <td><?php echo $unt->alamat_unit ?></td>
                  <td  class="d-flex justify-content-center">
                    <a href="<?php echo $unt->id_unit; ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdataunit<?php echo $unt->id_unit; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>

                    <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdataunit<?= $unt->id_unit; ?>"><i class="bi bi-trash-fill iconku me-1"></i></a>
                  </td>
                </tr>
                <?php $no++; ?>

              <?php endforeach; ?>
            </tbody>
          </table>

          <!-- modal edit data -->
          <!-- Modal -->
          <?php foreach ($unit as $unt) : ?>
            <div class="modal fade" id="editdataunit<?php echo $unt->id_unit; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header " style="background: #013161;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                  </div>
                  <div class="modal-body ">

                    <form method="post" action="<?php echo base_url('C_unit/editUser') ?>">
                      <div class="mb-3">
                        <label for="nama_unit" class="col-form-label">Nama Unit</label>
                        <input type="hidden" class="form-control" name="id_unit" value="<?php echo $unt->id_unit; ?>" required />
                        <input type="text" class="form-control" value="<?php echo $unt->nama_unit; ?>" name="nama_unit" required />
                      </div>
                      <div class="mb-3">
                        <label for="alamat_unit" class="col-form-label">Alamat Unit</label>
                        <input type="text" class="form-control" name="alamat_unit" id="recipient-name" value="<?php echo $unt->alamat_unit; ?>" required />
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- end modal -->

        </div>
      </div>
      <!-- end card data users -->

      <!-- modal hapus data -->
      <?php foreach ($unit as $unt) : ?>
        <div class="modal fade" id="hapusdataunit<?= $unt->id_unit; ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url('C_unit/hapusdatauser/') . $unt->id_unit; ?>" class="btn btn-primary text-white">Iya</a>
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