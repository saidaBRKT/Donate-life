<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
$data = new requestsController();
$reqs = $data->getAllRequests($_SESSION['id']);
  if(isset($_POST['add'])){
    $newReq=new donatController();
    $newReq->addReqs($_SESSION['id']);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/my-bootstrap.css">
  <link rel="stylesheet" href="./assets/css/styleDonor.css">
  <title>Document</title>
</head>
<body>
<?php require_once "sidebar-donor.php";?>
<main class="container-fluid px-0 pt-5 h-100 pb-0">
  <div class="w-100 text-center my-5">
    <h4 class="fw-bold" style="color:rgba(219,138,222,1)">Add request for blood donation :</h4>
  </div>
  <div class="h-50">
  <!-- FORM ADD -->
  <div class="add h-100 mx-auto p-3 col-11 col-sm-8 mt-5"  style="" id="add">
    <form class="bg-white p-3 " action="" method="post" style="border: 2px solid gray;border-radius: 5px;" >
      <div class="d-flex justify-content-end">
        <button type="button" class="plus text-danger " onclick="window.location.href='reqForBlood'" >X</i></button>
      </div>
      <div class="row">
        <div class="mb-2 col-12 col-lg-6 "> 
          <label for="name" class="form-label text-secondary">Name </label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
          <small></small>
        </div>
        <div class="mb-2 col-12 col-lg-6 "> 
          <label for="city" class="form-label text-secondary">City </label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
          <small></small>  
        </div>
      </div>
      <div class="row">
        <div class="mb-2 col-12 col-lg-6 "> 
          <label for="phone" class="form-label text-secondary">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter City">
          <small></small>  
        </div>
        <div class="mb-2 col-12 col-lg-6 "> 
          <label class="form-label text-secondary">Groupe </label>             
          <select  name="groupe" class="form-select" aria-label="Default select example">
            <option  value="A+">A+</option>
            <option  value="A-">A-</option>
            <option  value="B+">B+</option>
            <option  value="B-">B-</option>
            <option  value="AB+">AB+</option>
            <option  value="AB-">AB-</option>
            <option  value="O+">O+</option>
            <option  value="O-">O-</option>
          </select>                       
          <small></small>
        </div>
      </div>
      <div class="w-100 d-flex justify-content-center my-5">
        <input type="submit" class="btn text-white w-50" name="add" style="background-color: rgba(219,138,222,1)"   value="Save"> 
      </div>
    </form>
  </div>
  <!-- End FORM ADD -->
</div>

<!-- Footer -->
<footer class="footer text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-twitter"></i></a>
        <a href="" class="me-4 text-reset text-decoration-none"> <i class="fab fa-google"></i></a>
        <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-linkedin"></i></a>
        <a href="" class="me-4 text-reset text-decoration-none"><i class="fab fa-github"></i></a>
      </div>
      <!-- Right -->
    </section>
    <!-- End Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column 1-->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
          <!-- Content -->
          <a class="navbar-brand" href="Home">
            <img src="./assets/images/logo_donate.png"alt="logo" width="150px" height="50px"/>
          </a>
        </div>
        <!--End Grid column 1-->

        <!-- Grid column 2-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
          <p><a href="#!" class="text-reset">Home</a></p>
          <p><a href="#!" class="text-reset">About Us</a></p>
          <p><a href="#!" class="text-reset">Contact Us</a></p>
        </div>
        <!--End Grid column 2-->

        <!-- Grid column 3-->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Youssoufia, NY 10012</p>
          <p><i class="fas fa-envelope me-3"></i>DonatLife51@gmail.com</p>
          <p><i class="fas fa-phone me-3"></i> (+212) 05 23 45 67 88</p>
        </div>
        <!--end Grid column 3-->
      </div>
      <!--End Grid row -->
      </div>
    </section>
    <!--End Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">© 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">DonateLife.com</a>
    </div>
    <!--End Copyright -->
  </footer>
  <!-- end Footer--> 
</main>
<script src="./assets/js/my-bootstrap.js"></script>
<script src="./assets/js/formJS.js"></script>
</body>
</html>