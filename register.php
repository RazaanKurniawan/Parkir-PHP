<?php 
include('includes/navbar.php'); 
include('includes/header.php');
?>
  <div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                       <h5>Registration Form</h5>
                    </div>
                    <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="">Nama Lengkap</label>
                                <input type="text" id="nama_lengkap" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" id="username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" id="confirm_password" class="form-control">
                                <input type="checkbox" onclick="myFunction()"> Show Password
                            </div>    
                            <div class="form-group">
                                <button type="submit" class="btn btn-register btn-primary">Register</button>
                            </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
    <script>
      function myFunction() {
      var x = document.getElementById("confirm_password");
      if (x.type === "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
    }
    </script> 
      

    <script>
      $(document).ready(function() {

        $(".btn-register").click( function() {
        
          var nama_lengkap = $("#nama_lengkap").val();
          var username = $("#username").val();
          var password = $("#password").val();
          var confirmPassword = $("#confirm_password").val();

          if (nama_lengkap.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Nama Lengkap Wajib Diisi !'
            });
          } 

           else if(username.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Username Wajib Diisi !'
            });

          } 
           else if(password.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password Wajib Diisi !'
            });
            }

            else if (password != confirmPassword){
            $("#CheckPasswordMatch")

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password tidak sama !'
            });


          } else {

            //ajax
            $.ajax({

              url: "simpan-register.php",
              type: "POST",
              data: {
                  "nama_lengkap": nama_lengkap,
                  "username": username,
                  "password": password,
                  "confirm_password": confirmPassword
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Register Berhasil!',
                    timer: 2000,
                    showCancelButton: false,
                    showConfirmButton: false
                  })
                  .then (function() {
                    window.location.href = "login.php";
                  });


                  $("#nama_lengkap").val('');
                  $("#username").val('');
                  $("#password").val('');
                  $("#confirm_password").val('');

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Register Gagal!',
                    text: 'silahkan coba lagi!'
                  });

                }

                console.log(response);

              },

              error:function(response){
                  Swal.fire({
                    type: 'error',
                    title: 'Opps!',
                    text: 'server error!'
                  });
              }

            })

          }

        }); 

      });
    </script>
</div>
  </body>
</html>