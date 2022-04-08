<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/mycss.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body style="font-size: 16px;">
  <?php
  $id_keluar  = $_GET['id_keluar'];
  $id_unit    = $_GET['id_unit'];

  function penyebut($nilai)
  {
    $nilai = abs($nilai);
    $huruf = array("", "SATU", "DUA", "TIGA", "EMPAT", "LIMA", "ENAM", "TUJUH", "DELAPAN", "SEMBILAN", "SEPULUH", "SEBELAS");
    $temp = "";
    if ($nilai < 12) {
      $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
      $temp = penyebut($nilai - 10) . " BELAS";
    } else if ($nilai < 100) {
      $temp = penyebut($nilai / 10) . " PULUH" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = penyebut($nilai / 100) . " RATUS" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
      $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
      $temp = penyebut($nilai / 1000) . " RIBU" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
      $temp = penyebut($nilai / 1000000) . " JUTA" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
      $temp = penyebut($nilai / 1000000000) . " MILYAR" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
      $temp = penyebut($nilai / 1000000000000) . " TRILYUN" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
  }

  function terbilang($nilai)
  {
    if ($nilai < 0) {
      $hasil = "MINUS " . trim(penyebut($nilai));
    } else {
      $hasil = trim(penyebut($nilai));
    }
    return $hasil;
  }
  $query1 = mysqli_query($koneksi, "SELECT * FROM tb_unit WHERE id_unit = '$id_unit'");
  $row1 = mysqli_fetch_array($query1);
  ?>
  <div class="container mt-5 rounded border border-1" style="width: 794px; height: 605px; background: #fff;">
    <!-- header awal -->
    <div class="header1">
      <div class="container d-flex align-items-end ">
        <div class="text-dark  mt-3">
          <p style="margin-left: 140px; font-size: 16px;" class="fw-bold fs-6">BRI Samratulangi</p>

        </div>
        <div class="text-dark  mt-5 " style="margin-left: 90px;">

          <p class="mt-1"><span style="margin-left: 140px" class="fw-bold fs-6 mt-1"><?php echo $row1['nama_unit_tujuan']; ?></span></p>

        </div>
      </div>

    </div>

    <!-- header akhir -->

    <!-- body uraian dan harga -->

    <div class="container d-flex justify-content-between " style="margin-top: 5rem;">
      <div class="section text-light " style="width: 63.7%">
        <table class="table table-borderless text-center">
          <tbody>
            <?php
            $query2 = mysqli_query($koneksi, "SELECT * FROM tb_barang_keluar JOIN tb_unit ON tb_unit.id_unit = tb_barang_keluar.id_unit JOIN barang ON barang.id_barang = tb_barang_keluar.id_barang WHERE id_keluar = '$id_keluar'");
            $no = 1;
            while ($row2 = mysqli_fetch_array($query2)) {
            ?>
              <tr class="align-middle">
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $row2['nama_barang']; ?></td>
                <td>X <?php echo $row2['jumlah_barang_keluar']; ?></td>
              </tr>
            <?php
              $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="section text-light " style="width: 37.3%">
        <table class="table table-borderless text-center">

          <tbody>
            <?php
            $query3 = mysqli_query($koneksi, "SELECT * FROM tb_barang_keluar JOIN tb_unit ON tb_unit.id_unit = tb_barang_keluar.id_unit JOIN barang ON barang.id_barang = tb_barang_keluar.id_barang WHERE id_keluar = '$id_keluar'");
            $total = 0;
            while ($row3 = mysqli_fetch_array($query3)) {
              $total += $row3['jumlah_barang_keluar'] * $row3['harga_satuan'];
            ?>
              <tr>
                <th scope="row"><?php echo $row3['jumlah_barang_keluar'] * $row3['harga_satuan']; ?></th>
              </tr>
            <?php } ?>
          </tbody>

        </table>
        <div class="jumlah container d-flex align-item-center text-dark mt-1">
          <p style="margin-left: 5rem; color: black;" class="fw-bold mt-1"><?php echo $total; ?></p>
        </div>


      </div>





      <!-- akhir body -->
    </div>
    <div class="terbilang ms-5 text-dark">
      <p><?php echo terbilang($total); ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
      window.print();
    </script>
</body>

</html>