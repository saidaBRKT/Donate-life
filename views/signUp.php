<?php
if(isset($_POST['save'])){
  $user=new userController();
  $user->register();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/formStyle.css"/>
    <link rel="stylesheet" href="assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>DonateLife</title>
    <style>
      .signIN{
        border: 2px solid rgba(219,138,222,1);
        border-raduis:7px;
      }
      .signIN:hover{
        border: 2px solid #FFF;
        border-raduis:7px;
        background-color: rgba(219,138,222,1);
      }
      .btnradio{
        backgound-color: gray;
      }
      .btnradio{
        outline:rgba(246,191,159,1);
      }
    </style>
</head>
<body>

<main class="container-fluid px-0 d-flex flex-column">
      <!-- Navbar -->

      <nav class="navbar navbar-expand-lg navbar-light fs-5" id="bgnav">
         <div class="container">
          <a class="navbar-brand" href="dashboard">
            <img
              src="assets/images/logo_donate.png"
              alt="logo"
              width="150px"
              height="50px"
            />
          </a>
          <div class="d-flex flex-row">
           
          </div>
          <a href="signIn" class="signIN text-decoration-none btn text-white px-2 px-sm-5 fw-bold d-flex d-sm-none"><i class="bi bi-box-arrow-in-right"></i></a>
          <a href="signIn" class="signIN text-decoration-none btn text-white px-2 px-sm-5 fw-bold d-none d-sm-flex">Sign IN</a>
        </div>
      </nav>
    <!--End Navbar -->
    <!-- content -->
    <div class="content container d-flex justify-content-center align-item-center">
    <div class=" mt-4 d-flex justify-content-center align-item-center">  
      <div class="row d-flex flex-column flex-md-row w-100" >
        <div class="child1 d-none d-md-block col-md-6 h-100">
          <img src="./assets/images/Mobile login-pana.png" alt="login" width="100%" height="100%">
        </div>
        <div class="child2 col-12 col-md-6 h-100 bg-light">
          <div >
          <form class="p-3 h-100 h-sm-70 d-flex flex-column justify-content-center align-item-center" method="post" id="myF" name = "myF">
        <h6 class="text-center fs-3 fw-bold mb-5" style="color: rgba(246,191,159,1)">SIGN UP</h6>
        
        <div class="mb-2">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" value="donor" name="role" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-secondary btnradio" for="btnradio1">Donor</label>

            <input type="radio" class="btn-check" value="patient" name="role" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-secondary btnradio" for="btnradio2" >patient</label>
          </div>
        <small></small>
      </div>
        <div class="mb-2">
          <label for="username" class="form-label text-secondary">Email</label>
          <input type="text" class="form-control" id="username" name="email"  placeholder="Enter your username">
          <small></small>
        </div>
        <div class="mb-4 mb-sm-2">
          <label for="password" class="form-label text-secondary"  >Password</label>
          <input type="password" class="form-control" id="password" name="password"   placeholder="Enter your password">
          <small></small>
        </div>
        <div class="mb-4 mb-sm-2">
          <label for="confPassword" class="form-label text-secondary"  >Confirm Password</label>
          <input type="password" class="form-control" id="confPassword" name="confPassword"   placeholder="Re-enter your password">
          <small></small>
        </div>      
        <input type="submit" class="signUp btn text-white w-100" name="save" value="SIGN UP">   
        <p class="text-center mt-2">Already have an account? <a href="signIn" style="color: rgba(246,191,159,1)" >sign in</a> here.</p>  
      </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- end content -->
    </main>  

  
    <script src="assets/js/my-bootstrap.js"></script> 
    <script src="assets/js/ValidSignUp.js"></script>

</body>

</html>