<?php

  session_start();

  if(!$_SESSION['id_user']){
    header("location: login.php");
  }

?>

<?php 
$page_title = "Dashboard";
$dashboard = "nav-item active";
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php include('includes/footer.php'); ?>