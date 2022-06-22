<?php
// if(!isset($_SESSION["logged"])){
//   header('location: signIn');
//  die();
// }
$dataReqs = new requestsController();
$nbrReqs =$dataReqs->CountAllReqs($_SESSION['id']);
$data = new donatController();
$nbr =$data->CountAllReqs($_SESSION['id']);
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
  <?php require_once "sidebar-donor.php"; ?>
  <main class="container-fluid px-0">
    <!-- content -->
      <div class="container content bg-danger">
        <div class="profile bg-light">
          <div class="child1 d-flex justify-content-center">
            <img src="./assets/images/profile.jfif" alt="">
          </div>
          <div class="child2 d-flex flex-column justify-content-center pt-3 ">
            <div class="d-flex justify-content-center"><h4><?php echo $_SESSION['email'] ?></h4></div>
            <div class="d-flex justify-content-center"><h1>We are glad to have you with us !</h1> </div> 
          </div>
          <div class="child3 d-flex justify-content-center align-item-center h-25">
            <a href="tester" class="btn my-auto text-white fw-bold fs-5">Pass the test</a>
          </div>
        </div>
      </div>
    <!-- cards -->
    <div class="w-100 fw-bold fs-3 lesCards">
      <div class="container-fluid cont_cards col py-3 justify-content-center align-items-center">
        <div class="cards px-auto row justify-content-center">
          <div class="col-11 col-md-8 col-lg-4 bg-warning card bg-light col-md-3 mx-2 mb-2" style="height: 9rem;">
            <div class="card-body position-relative">
              <div class="d-flex position-absolute top-0">
                <span class="me-2"><img src="assets/images/icons8-blood-donation-24.png" class="pb-1" alt="logo" width="30px" height="30px" /></span>
                <span>Requests</span>
              </div>
              <div>
                <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:#FF2156;"><?php echo $nbr[0] ?></h2></span>
              </div>
              <a href="donors" class="btn w-100 position-absolute bottom-0 start-0 w-100" style="color:#DC8CDB">View more ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End cards -->
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
</body>
</html>