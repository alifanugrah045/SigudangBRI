<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Suplier</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Suplier</li>
      </ol>

      <!-- data users card -->
      <div class="card shadow-sm">
        <h5 class="card-header">
          <i class="bi bi-truck"></i>
          Data Suplier
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
                      <form method="post" action="<?php echo base_url('C_suplier/tambahuser') ?>">
                          <div class="mb-3">
                            <label for="nama_suplier" class="col-form-label">Nama Suplier</label>
                            <input type="hidden" class="form-control" name="id_suplier" required />
                            <input type="text" class="form-control" name="nama_suplier" id="recipient-name" required />
                          </div>
                        <div class="mb-3">
                          <label for="no_suplier" class="col-form-label">No Suplier</label>
                          <input type="text" class="form-control" name="no_suplier" id="recipient-name" required />
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
              <!-- end modal -->

              <!-- akhir modal edit -->
            </div>
          </div>

          <table class="table table-hover table-borderless table-striped " id="datatablesSimple">


            <thead class="text-light" style="background: #013161;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Suplier</th>
                <th scope="col">No Suplier</th>
                <th scope="col" >Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php foreach ($suplier as $no => $sup) : ?>

                <tr>
                  <td scope="row"><?php echo ($no + 1); ?></td>
                  <td><?php echo $sup->nama_suplier ?></td>
                  <td><?php echo $sup->no_hp_suplier ?></td>
                  <td  class="d-flex justify-content-center">
                    <a href="<?php echo $sup->id_suplier ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdatasuplier<?= $sup->id_suplier; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>

                    <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdatasuplier<?= $sup->id_suplier; ?>"><i class="bi bi-trash-fill iconku me-1"></i></a>
                  </td>
                </tr>
                <?php $no++; ?>

              <?php endforeach; ?>
            </tbody>
          </table>

          <!-- modal edit data -->
          <!-- Modal -->
          <?php foreach ($suplier as $sup) : ?>
          <div class="modal fade" id="editdatasuplier<?= $sup->id_suplier; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header " style="background: #013161;">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                </div>
                <div class="modal-body ">

                  <form method="post" action="<?php echo base_url('C_suplier/editUser') ?>">
                    <input type="hidden" name="id_user" value="">
                    <fieldset>
                      <div class="mb-3">
                        <label for="nama_suplier" class="col-form-label">Nama Suplier</label>
                        <input type="hidden" class="form-control" name="id_suplier" value="<?php echo $sup->id_suplier; ?>" required />
                        <input type="text" class="form-control" value="<?php echo $sup->nama_suplier; ?>" name="nama_suplier"  required />
                      </div>
                    </fieldset>
                    <div class="mb-3">
                      <label for="no_suplier" class="col-form-label">No Suplier</label>
                      <input type="text" class="form-control" name="no_suplier" id="recipient-name" value="<?php echo $sup->no_hp_suplier; ?>" />
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
      <?php foreach ($suplier as $sup) : ?>
        <div class="modal fade" id="hapusdatasuplier<?= $sup->id_suplier; ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url('C_suplier/hapusdatauser/') . $sup->id_suplier; ?>" class="btn btn-danger text-white">Iya</a>
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