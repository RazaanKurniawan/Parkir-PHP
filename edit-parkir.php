<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM kendaraan WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<?php 
$page_title = "Edit Parkir";
include('includes/header.php');
include('includes/navbarlog.php');
?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PARKIR
            </div>
            <div class="card-body">
              <form action="edit-parkirkonek.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $row['plat_nomor'] ?>">
                <div class="form-group">
                  <label>Plat Nomor</label>
                  <input type="text" name="plat_nomor" value="<?php echo $row['plat_nomor'] ?>" placeholder="Masukkan Plat Nomor" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Jenis Kendaraan</label>
                  <select name="jenis_kendaraan" class="form-control">
                        <option value="Motor">Motor</option>
                        <option value="Mobil">Mobil</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Kendaraan</label>
                  <input type="text" name="nama_kendaraan" value="<?php echo $row['nama_kendaraan'] ?>" placeholder="Masukkan Nama Kendaraan" class="form-control">
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