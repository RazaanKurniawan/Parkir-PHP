<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$plat_nomor = $_POST['plat_nomor'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$nama_kendaraan = $_POST['nama_kendaraan'];

if(isset($_FILES['foto'])) {
    $file_name = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];

   
    $target_dir = "foto-kendaraan/";
    $target_file = $target_dir . basename($file_name);


    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Error: File tidak berhasil diunggah.";
    }
} else {
    echo "Error: Tidak ada berkas yang diunggah.";
}

//query insert data ke dalam database
$query = "INSERT INTO kendaraan (plat_nomor, jenis_kendaraan, nama_kendaraan, gambar, jam_masuk) VALUES ('$plat_nomor', '$jenis_kendaraan', '$nama_kendaraan', '$file_name', NOW())";

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