<?php 
session_start();

if(!$_SESSION['id_user']){
  header("location: login.php");
}
$page_title = "Home Page";
include('includes/header.php');
include('includes/navbarlog.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Login and Registration System In PHP</h2>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>