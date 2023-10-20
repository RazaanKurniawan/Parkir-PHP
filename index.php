<?php 

session_start();

if(!$_SESSION['id_user']){
  header("location: login.php");
}
$page_title = "Parkiran Form";
$parkiran = "nav-item active";
include('includes/header.php');
include('includes/navbarlog.php');
?>

    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center">
              DATA PARKIRAN
            </div>
            <div class="card-body">
              <a href="tambah-parkir.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" style="font-family: Sans-serif;" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">PLAT NOMOR</th>
                    <th scope="col">JENIS KENDARAAN</th>
                    <th scope="col">NAMA KENDARAAN</th>
                    <th scope="col">FOTO KENDARAAN</th>
                    <th scope="col">JAM MASUK</th>
                    <th scope="col">JAM KELUAR</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM kendaraan");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr class="text-center">
                      <td><?php echo $no++ ?></td>
                      <td style="text-transform: uppercase"><?php echo $row['plat_nomor'] ?></td>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><?php echo $row['nama_kendaraan'] ?></td>
                      <td><img src="foto-kendaraan/<?php echo $row['gambar'] ?>" width="100%" height="100%"></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
                      <td class="text-center">
                        <a href="update-parkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">JAM</a><br/>
                        <a href="edit-parkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">EDIT</a><br/>
                        <a href="hapus-parkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <?php include('includes/footer.php'); ?>
   
  