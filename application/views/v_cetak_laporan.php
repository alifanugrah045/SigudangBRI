<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>\
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="card shadow-sm container">
        <div class="judul text-center">
            <h4>LAPORAN BARANG MASUK</h4>
            <h5>TANGGAL <?php echo $dari; ?> - <?php echo $sampai; ?></h5>
        </div>

        <table class="table " id="datatablesSimple">
            <thead class="border-0 text-white" style="background: #013161;">

                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Total</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                $total_harga = 0;
                foreach ($laporanmsk as $msk) :
                    $total_harga += $msk->total_harga;
                ?>

                    <tr>
                        <td width="50px" scope="row"><?= $no++; ?></td>
                        <td><?php echo $msk->nama_barang ?></td>
                        <td><?php echo $msk->jumlah ?></td>
                        <td><?php echo $msk->harga_barang ?></td>
                        <td><?php echo $msk->total_harga ?></td>

                    </tr>

                <?php endforeach; ?>

                <tr class="border-1" style="font-weight: bold;">
                    <td colspan="4">Total Harga</td>
                    <td><?php echo $total_harga; ?></td>
                </tr>
            </tbody>
    </div>

    </table>

    <!-- <script>window.print()</script> -->
</body>

</html>