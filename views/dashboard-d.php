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
    </style>
</head>
<body> 
<?php
require_once "sidebar-donor.php";
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
                  <span>Donors</span>
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:#FF2156;">100</h2></span>
                </div>
                <a href="donors" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
              </div>
            </div>
            <div class="card bg-light col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-donor-32.png" class="pb-1" alt="logo" width="30px" height="30px"/></span>
                  <span>Patients</span>
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2  style="color:gray;">100</h2></span>
                </div>
                <a href="patients" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
              </div>
            </div>
            <div class="card bg-light col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-blood-64.png" class="pb-1" alt="logo" width="30px" height="30px"/></span>
                  <span>Poches</span>
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:rgba(219,138,222,1);;">100</h2></span>
                </div>
                <a href="#" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
              </div>
            </div>
            <div class="card bg-light col-md-3 ps-0 pe-0 me-3 mb-2" style="width: 16rem; height: 9rem;">
              <div class="card-body position-relative">
                <div class="d-flex position-absolute top-0">
                  <span class="me-2"><img src="assets/images/icons8-how-quest-50.png" class="pb-1" alt="logo" width="30px" height="30px"/></span>
                  <span>Requests</span>   
                </div>
                <div>
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:rgba(246,191,159,1);">100</h2></span>
                </div>
              </div>
              <a href="requests" class="btn w-100 position-absolute bottom-0 start-0">View more ...</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- End cards -->
  </div>
</main> 