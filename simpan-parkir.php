<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$plat_nomor = $_POST['plat_nomor'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$nama_kendaraan = $_POST['nama_kendaraan'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];

//query insert data ke dalam database
$query = "INSERT INTO kendaraan (plat_nomor, jenis_kendaraan, nama_kendaraan, jam_keluar, jam_masuk) VALUES ('$plat_nomor', '$jenis_kendaraan', '$nama_kendaraan', '$jam_masuk', '$jam_keluar')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");
} 

else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
}

?>