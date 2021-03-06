<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Data Users</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Kelola Users</li>
      </ol>

      <!-- data users card -->
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
                      <form method="post" action="<?php echo base_url('C_user/tambahuser') ?>">
                        <div class="mb-3">
                          <label for="username" class="col-form-label">Username</label>
                          <input type="hidden" class="form-control" name="id_user" required />
                          <input type="text" class="form-control" name="username" id="recipient-name" required />
                        </div>
                        <div class="mb-3">
                          <label for="password" class="col-form-label">Password</label>
                          <input type="password" class="form-control" name="password" id="recipient-name" required />
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal -->

            </div>
          </div>

          <!-- table data user -->
          <table class="table table-hover table-borderless table-striped " id="datatablesSimple">
            <!-- table head -->
            <thead class="text-light " style="background: #013161;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col" >Aksi</th>
              </tr>
            </thead>
            <!-- akhir table head -->

            <!-- table body -->
            <tbody>
              <?php foreach ($users as $no => $usr) : ?>
                <tr>
                  <td scope="row"><?php echo ($no + 1); ?></td>
                  <td><?php echo $usr->username ?></td>
                  <td><?php echo md5($usr->password) ?></td>
                  <td  class="d-flex">

                    <a href="<?php echo $usr->id_user ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdatauser<?= $usr->id_user; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>

                    <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdatauser<?= $usr->id_user; ?>"><i class="bi bi-trash-fill iconku me-1"></i></a>

                  </td>
                </tr>
                <?php $no++; ?>
              <?php endforeach; ?>
            </tbody>
            <!-- akhir table body -->

          </table>
          <!-- end table data user -->

          <!-- modal edit data -->
          <!-- Modal -->
          <?php foreach ($users as $usr) : ?>
            <div class="modal fade" id="editdatauser<?= $usr->id_user; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header " style="background: #013161;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                  </div>
                  <div class="modal-body ">

                    <form method="post" action="<?php echo base_url('C_user/editUser') ?>">
                      <div class="mb-3">
                        <label for="username1" class="col-form-label">Username</label>
                        <input type="hidden" class="form-control" name="id_user1" value="<?php echo $usr->id_user; ?>" required />
                        <input type="text" class="form-control" name="username1" value="<?php echo $usr->username; ?>" required />
                      </div>
                      <div class="mb-3">
                        <label for="password1" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="password1" value="<?php echo $usr->password; ?>" />
                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
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
      <?php foreach ($users as $no => $usr) : ?>
        <div class="modal fade" id="hapusdatauser<?= $usr->id_user; ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url('C_user/hapusdatauser/') . $usr->id_user; ?>" class="btn btn-primary text-white">Iya</a>
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