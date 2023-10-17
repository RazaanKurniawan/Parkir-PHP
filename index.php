<?php 
$page_title = "Parkiran Form";
include('includes/header.php');
include('includes/navbarlog.php');
?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA PARKIRAN
            </div>
            <div class="card-body">
              <a href="tambah-parkir.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">PLAT NOMOR</th>
                    <th scope="col">JENIS KENDARAAN</th>
                    <th scope="col">NAMA KENDARAAN</th>
                    <th scope="col">JAM MASUK</th>
                    <th scope="col">JAM KELUAR</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM kendaraan");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $row['plat_nomor'] ?></td>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><?php echo $row['nama_kendaraan'] ?></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
                      <td class="text-center">
                        <a href="update-parkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">JAM</a>
                        <a href="edit-parkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">EDIT</a>
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
   
  