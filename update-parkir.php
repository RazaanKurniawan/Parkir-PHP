<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_GET['id'];
$jam_keluar = $_GET['jam_keluar'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE kendaraan SET jam_keluar = NOW() where id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>