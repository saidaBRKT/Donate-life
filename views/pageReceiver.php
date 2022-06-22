<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
$dataReqs = new requestsController();
$nbr=$dataReqs->CountAllReqs($_SESSION['id']);
// $data = new donatController();
// $nbr =$data->CountAllReqs($_SESSION['id']);
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
  <?php require_once "views/includes/sidebar-receiver.php"; ?>
  <main class="container-fluid p-0  bg-light h-100 pt-5">
    <!-- content -->
      <div class="container content">
        <div class="profile bg-white h-100">
          <div class="child1 w-100 d-flex justify-content-center">
            <img src="./assets/images/welcome.gif" alt="welcome" height="100%" colss="col-8 col-lg-6">
          </div>
          <div class="child2 d-flex flex-column justify-content-center mb-2">
            <div class="d-flex justify-content-center mb-3"><h1 class="text-secondary">We are glad to have you with us !</h1> </div> 
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
                <span>Request to donate blood</span>
              </div>
              <div>
                <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:#FF2156;"><?php echo $nbr[0] ?></h2></span>
              </div>
              <a href="receiver_Requests" class="btn w-100 position-absolute bottom-0 start-0 w-100" style="color:#DC8CDB">View more ...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End cards -->
    <!-- Footer -->
    <?php require_once "views/includes/footer_donor.php"; ?>
    <!-- end Footer--> 
</main>
<script src="./assets/js/my-bootstrap.js"></script>
</body>
</html>