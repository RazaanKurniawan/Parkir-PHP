<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM kendaraan WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Parkir</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update-parkir.php" method="POST">
                
                <div class="form-group">
                  <label>Plat Nomor</label>
                  <input type="text" name="plat_nomor" value="<?php echo $row['plat_nomor'] ?>" placeholder="Masukkan Plat Nomor" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Jenis Kendaraan</label>
                  <input type="text" name="jenis_kendaraan" value="<?php echo $row['jenis_kendaraan'] ?>" placeholder="Masukkan Jenis Kendaraan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Kendaraan</label>
                  <input type="text" name="nama_kendaraan" value="<?php echo $row['nama_kendaraan'] ?>" placeholder="Masukkan Nama Kendaraan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jam Masuk</label>
                  <input type="text" name="jam_masuk" value="<?php echo $row['jam_masuk'] ?>" placeholder="Masukkan Waktu Jam Masuk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jam Keluar</label>
                  <input type="text" name="jam_keluar" value="<?php echo $row['jam_keluar'] ?>" placeholder="Masukkan Waktu Jam Keluar" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>