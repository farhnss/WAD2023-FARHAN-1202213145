<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = 'localhost:3308';
$dbuser = 'root';
$dbpass = '';
$dbname = 'modul3_wad';
//
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($connect -> connect_error){
    die("Koneksi gagal: " . $connect -> connect_error);
}

//
?>