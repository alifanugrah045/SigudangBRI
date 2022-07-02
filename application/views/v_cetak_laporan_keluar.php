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
            <h4>LAPORAN BARANG KELUAR</h4>
            <h5>TANGGAL <?php echo $dari; ?> - <?php echo $sampai; ?></h5>
        </div>

        <table class="table table-borderless " id="datatablesSimple">
            <thead class="text-light" style="background: #013161;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>

                </tr>
            </thead>
            <tbody>

                <?php $total_harga = 0;
                foreach ($laporanklr as $no => $klr) :
                    $total_harga += $klr->total_harga; ?>
                    <tr>
                        <td scope="row"><?php echo ($no + 1); ?></td>
                        <td><?php echo $klr->tanggal_keluar ?></td>
                        <td><?php echo $klr->jumlah_keluar ?></td>
                        <td><?php echo $klr->harga_barang ?></td>
                        <td><?php echo $klr->total_harga ?></td>


                    </tr>
                <?php endforeach; ?>
                <tr class="border-1" style="font-weight: bold;">
                    <td colspan="4">Total Harga</td>
                    <td><?php echo $total_harga; ?></td>
                </tr>
            </tbody>
        </table>

        <!-- <script>window.print()</script> -->
</body>

</html>