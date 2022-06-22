<?php
// if(!isset($_SESSION["logged"])){
//   header('location: signIn');
//  die();
// }
$dataDonors = new donorsController();
$nbrDonors =$dataDonors->CountAllDonors();
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
    </style>
</head>
<body> 
<?php
require_once "sidebar.php";
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
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:#FF2156;"><?php echo $nbrDonors[0] ?></h2></span>
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
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2  style="color:gray;">10</h2></span>
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
                  <span class="h5 fw-bold position-absolute top-50 start-50 translate-middle"><h2 style="color:rgba(219,138,222,1);;"><?php echo $nbr[0] ?></h2></span>
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
<script>
  let donnees = [];
    fetch("./models/HomeGroup.php")
    .then(response => response.json())
    .then(data => {
      myChart(data);
      console.log(data)
    }).catch(err => console.log('hello',err))
function myChart(data){
  console.log(data['count'])
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-' ,'O+', 'O-'],
    datasets: [{
      label: 'of Votes',
      data: [data['N1'], data['N2'], data['N3'], data['N4'], data['N5'], data['N6'], data['N7'], data['N8']],
      backgroundColor: [
        'rgba(255, 33, 86,0.2)',
        'rgba(246,191,159,0.2)',
        'rgba(220, 233, 233, 0.2)',
        'rgba(233, 220, 220, 0.2)',
        'rgba(220, 140, 219, 0.2)',
        'rgba(196, 197, 176, 0.2)',
        'rgba(202, 130, 130, 0.2)',
        'rgba(224, 224, 65, 0.2)'
      ],
      borderColor: [
        'rgba(255, 33, 86, 1)',
        'rgba(246,191,159,1)',
        'rgba(220, 233, 233, 1)',
        'rgba(233, 220, 220, 1)',
        'rgba(220, 140, 219, 1)',
        'rgba(196, 197, 176, 1)',
        'rgba(202, 130, 130, 1)',
        'rgba(224, 224, 65, 1)'
      ],
      borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
}
</script>
</body>
</html>