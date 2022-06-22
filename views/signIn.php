<?php
if(isset($_SESSION["logged"])){
  if($_SESSION["role"]=='admin')
    header('location: dashboard');
  if($_SESSION["role"]=='donor')
    header('location: pageDonor');
    if($_SESSION["role"]=='donor')
    header('location: pageReceiver');
die();
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $message="";
  if(empty($_POST['email']) || empty($_POST['password'])){
    $message="All field are required";
  }
  else{
    $user=new userController();
    $u=$user->auth();
    var_dump($u);
    die();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/formStyle.css"/>
    <link rel="stylesheet" href="assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>DonateLife</title>
    <style>
      .signIN{
        border: 2px solid #FF2156;
        border-raduis:7px;
        color:#FF2156;
      }
      .signIN:hover{
        border: 2px solid #FFF;
        border-raduis:7px;
        background-color: #FF2156;
        color:white;
      }
    </style>
</head>
<body>

<main class="container-fluid px-0 d-flex flex-column">
      <!-- Navbar -->

      <?php
  require_once "views/includes/navbar_sIN_sUP.php";
?>
    <!--End Navbar -->
    <!-- content -->
    <div class="content container d-flex justify-content-center align-item-center">
    <div class=" mt-4 d-flex justify-content-center align-item-center">  
      <div class="row d-flex flex-column flex-md-row w-100" >
        <div class="child1 d-none d-md-block col-md-6 h-100">
          <img src="./assets/images/Reset password-pana.png" alt="login" width="100%" height="100%">
        </div>
        <div class="child2 col-12 col-md-6 h-100 bg-light">
          <div >
          <form class="p-3 h-100 h-sm-70 d-flex flex-column justify-content-center align-item-center" action="signIn" method="post" >
        <h6 class="text-center fs-3 fw-bold" style="color: rgba(246,191,159,1)">SIGN IN</h6>
        <p class="text-center mb-5">Enter your credentials to access your account</p>
        <!-- <div class="mb-2"> -->
          <?php  
            if(isset($message))  
            {  
                  echo '<label class="text-danger">'.$message.'</label>';  
            }  
            ?> 
          <br>
          <div class="mb-2">
          <label for="user" class="form-label text-secondary">Email</label>
          <input type="text" class="form-control" name="email" value ="<?php echo $_COOKIE['email'] ?? "" ;?>"  placeholder="Enter your username">
          <small></small>
          </div>
        <div class="mb-2">
          <label for="Password" class="form-label text-secondary"  >Password</label>
          <input type="password" class="form-control" id="Password"name="password" value ="<?php echo $_COOKIE['password'] ?? "" ;?>"   placeholder="Enter your password">
          <small></small>
        </div>  
        <div class="form-check form-switch mb-4 mb-sm-2">
          <input  name="check" class="form-check-input" type="checkbox" id="ckeck">
          <label class="form-check-label" for="ckeck">Remember me</label>
        </div>       
        <input type="submit" class="login btn text-white w-100" name="login" value="SIGN IN" >    
        <p class="text-center mt-2">No account? <a href="signUp" style="color: rgba(246,191,159,1)" >sign up</a> here</p>  
      </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- end content -->
    </main>  

  
    <script src="assets/js/my-bootstrap.js"></script>  
    <script src="assets/js/ValidSignIn.js"></script>

</body>

</html>