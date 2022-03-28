<?php
$host ="localhost";
$user ="root";
$pass = "";
$database ="db_brikeep";

$koneksi = mysqli_connect($host,$user,$pass);
if ($koneksi) {
    $buka=mysqli_select_db($koneksi,$database);
    if (!$buka) {
        echo "tidak bisa";
    }
}else{
    echo "mysql tidak terhubung";
}

?>