<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
$dataDonors = new donorsController();
$nbrDonors =$dataDonors->CountAllDonors();
$dataReceivers = new receiverController();
$nbrRec =$dataReceivers->CountAllReceivers();
$dataReqs = new requestsController();
$nbrReqs =$dataReqs->CountAllRequests();
$data = new donatController();
$nbr =$data->CountAllRequests();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/formStyle.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
      .card{
        border: 1px solid gray;
      }
      .card a{
        background-color:rgb(214, 211, 211);
      }
      .sidebar-link{
        display:flex;
        align-items:center;
      }
      .sidebar-link .right-icon{
        display:inline-flex;
      }
      .sidebar-link[aria-expanded="true"] .right-icon{
transform:rotate(180deg);
transition:all ease 0.25s;
      }
      /* #search{
        display:none;
      } */
    </style>
</head>
<body> 
<?php
require_once "views/includes/sidebar.php";
?>
<main class="mt-5 pt-5">
  <div class="container-fluid">
    <div class="row">
      <!-- End cards -->
      <div class="col-md-12 fw-bold fs-3">
        <div class="container-fluid cont_cards col py-3 justify-content-center align-items-center">
          <div class="cards row justify-content-center">
            <div class="card bg-lightcol-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-blood-donation-24.png" class="pb-1" alt="logo" width="30px" height="30px" /></span>
                  <h4 class="mt-2">Donors</h4> 
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:#FF2156;"><?php echo $nbrDonors[0] ?></h2></span>
                </div>
                <a href="donors" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
              </div>
            </div>
            <div class="card bg-light col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-donor-32.png" class="pb-1" alt="logo" width="30px" height="30px"/></span>
                  <h4 class="mt-2">Receivers</h4> 
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2  style="color:gray;"><?php echo $nbrRec[0] ?></h2></span>
                </div>
                <a href="receiver" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
              </div>
            </div>
            <div class="card bg-light col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-blood-64.png" class="pb-1" alt="logo" width="30px" height="30px"/></span>
                  <h4 class="mt-2">Reqs for donation</h4> 
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:rgba(219,138,222,1);;"><?php echo $nbr[0] ?></h2></span>
                </div>
                <a href="#" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
              </div>
            </div>
            <div class="card bg-light col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-how-quest-50.png" class="pb-1" alt="logo" width="30px" height="30px"/></span>
                  <h4 class="mt-2">Reqs for blood</h4>   
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:rgba(246,191,159,1);"><?php echo $nbrReqs[0] ?></h2></span>
                </div>
              </div>
              <a href="requests" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- End cards -->
    <!-- <a href="pageDonor" class="btn btn primary">passer le test</a> -->
    <!-- charts -->
    <!-- <div class="table-responsive" style="min-width:400px">
      <div class="row w-100 h-100">
          <canvas id="myChart" class="h-50 col-6 col-lg-11 mx-auto"></canvas>
      </div>
    </div> -->
    <section style="padding: 0px;height:550px;" class="table-responsive">    
      <div class="chart-container col-sm-12 col-md-9 m-auto" style="">
       <canvas id="myChart"></canvas>
       </div>
 </section>
    <!-- end charts -->
  </div>
</main>
<script src="assets/js/my-bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/statistique.js"></script>
</body>
</html>