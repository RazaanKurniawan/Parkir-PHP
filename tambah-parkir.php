<?php 
$page_title = "Tambah Parkir";
include('includes/header.php');
include('includes/navbarlog.php');
?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PARKIR
            </div>
            <div class="card-body">
              <form action="simpan-parkir.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>Plat Nomor</label>
                  <input type="text" name="plat_nomor" placeholder="Masukkan Plat Nomor" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jenis Kendaraan</label>
                  <select name="jenis_kendaraan" placeholder="Masukkan Jenis Kendaraan" class="form-control">
                        <option value="Motor">Motor</option>
                        <option value="Mobil">Mobil</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Kendaraan</label>
                  <input type="text" name="nama_kendaraan" id="nama_kendaraan" placeholder="Masukkan Nama Kendaraan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Upload foto :</label>
                  <input type="file" name="foto" class="form-control" required="required">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('includes/footer.php'); ?>