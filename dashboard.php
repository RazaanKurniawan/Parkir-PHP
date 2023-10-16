<?php

  session_start();

  if(!$_SESSION['id_user']){
    header("location: login.php");
  }

?>

<?php 
$page_title = "Dashboard";
include('includes/header.php');
include('includes/navbarlog.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-header">
                        <h4>User Dashboard</h4>
                    </div>
                <div class="card-body">
                    <h4>Hallo, Selamat Datang <?php echo $_SESSION['nama_lengkap'] ?>!</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>