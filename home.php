<?php 
session_start();

if(!$_SESSION['id_user']){
  header("location: login.php");
}
$page_title = "Home Page";
$home = "nav-item active";
include('includes/header.php');
include('includes/navbarlog.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row text-light">
            <div class="col-md-12 text-center">
                <h2>Aplikasi Parkir dengan Register dan Login Ajax</h2>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>