<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$plat_nomor = $_POST['plat_nomor'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$nama_kendaraan = $_POST['nama_kendaraan'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kendaraan SET plat_nomor = '$plat_nomor', jenis_kendaraan = '$jenis_kendaraan', nama_kendaraan = '$nama_kendaraan', jam_masuk = '$jam_masuk', jam_keluar = '$jam_keluar' WHERE id= '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>