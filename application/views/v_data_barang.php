<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Barang</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Barang</li>
            </ol>

            <!-- data users card -->
            <div class="card shadow-sm">
                <h5 class="card-header">
                    <i class="bi bi-truck"></i>
                    Data Barang
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
                                            <form method="post" action="<?php echo base_url('C_barang/tambahdata') ?>" enctype="multipart/form-data">
                                                <input type="hidden" name="id_barang" value="">
                                                <div class="mb-3">
                                                    <label for="nama_barang" class="col-form-label">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nama_barang" id="recipient-name" required />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="harga_barang" class="col-form-label">Harga Barang</label>
                                                    <input type="text" class="form-control" name="harga_barang" id="recipient-name" required />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="simpan" class="btn btn-primary" value="Simpan" data-bs-dismiss="modal">Simpan</button>
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
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga Barang</th>
                                <th scope="col" >Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($databarang as $no => $brg) : ?>

                                <tr>
                                    <td scope="row"><?php echo ($no + 1); ?></td>
                                    <td><?php echo $brg->nama_barang ?></td>
                                    <td><?php echo $brg->harga_barang ?></td>
                                    <td  class="d-flex justify-content-center">
                                        <a href="<?php echo $brg->id_barang ?>" class="btn btn-primary btnku" data-bs-toggle="modal" data-bs-target="#editdDataBarang<?= $brg->id_barang; ?>"><i class="bi bi-pencil-square iconku me-1"></i></a>
                                        <a class="btn btn-danger btnku ms-1" data-bs-toggle="modal" data-bs-target="#hapusdatabarang<?= $brg->id_barang; ?>"><i class="bi bi-trash-fill iconku me-1"></i></a>
                                    </td>
                                </tr>
                                <?php $no++; ?>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- modal edit data -->
                    <!-- Modal -->
                    <?php foreach ($databarang as $no => $brg) : ?>
                        <div class="modal fade" id="editdDataBarang<?= $brg->id_barang; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header " style="background: #013161;">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Edit Data</h5>
                                    </div>
                                    <div class="modal-body ">

                                        <form method="post" action="<?php echo base_url('C_barang/editUser') ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="id_barang" value="<?php echo $brg->id_barang ?>">

                                            <div class="mb-3">
                                                <label for="nama_barang" class="col-form-label">Nama Barang</label>
                                                <input type="text" class="form-control" value="<?php echo $brg->nama_barang ?>" name="nama_barang" id="recipient-name" required />
                                            </div>

                                            <div class="mb-3">
                                                <label for="harga_barang" class="col-form-label">Harga Barang</label>
                                                <input type="text" class="form-control" name="harga_barang" id="recipient-name" value="<?php echo $brg->harga_barang ?>" />
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
                    <!-- end modal -->

                    <!-- Hapus data pegawai -->
                    <?php foreach ($databarang as $no => $brg) : ?>
                        <div class="modal fade" id="hapusdatabarang<?= $brg->id_barang; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Yakin Ingin Menghapus Data?</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <a type="submit" href="<?= base_url('C_barang/hapusdatauser/') . $brg->id_barang; ?>" class="btn btn-danger text-white">Iya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- endhapus -->

                </div>
            </div>
            <!-- end card data users -->


        </div>
</div>
</div>
</main>
</div>
</div>