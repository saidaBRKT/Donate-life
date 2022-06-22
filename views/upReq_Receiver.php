<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
if(isset($_POST['id_Receiver'])){
  $exitReqs = new requestsController();
  $req = $exitReqs->getOneReqR();
}
else{
  Redirect::to('receiver_requests');
}

if(isset($_POST['update'])){
  $exitReqs = new requestsController();
  $exitReqs->updateReq($_SESSION['id']);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Update Request</title>
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navig">
        <div class="container-fluid">
          <a class="navbar-brand  py-0" href="#">
            <img src="assets/images/logo_donate.png" alt="logo" width="140px" height="60px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mb-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link my-auto text-center" aria-current="page" href="pageDonor">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center " href="tester">Test</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-center  active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Requests
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="w-100"><a class="dropdown-item" href="reqDonor">To donate blood</a></li>
                  <li class="w-100"><hr class="dropdown-divider"></li>
                  <li class="w-100"><a class="dropdown-item" href="#">For blood</a></li>
                </ul>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search"> -->
              <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
             
              <div class="d-flex justify-content-center">
              <button class="d-flex btn btn-outline-danger" type="submit">Logout</button>
              </div>
            <!-- </form> -->
          </div>
        </div>
      </nav>
    <!--  -->
<main class="container-fluid px-0 h-100 bg-light pb-0">
    <!-- content -->
      <div class="container">
        <div class="container ">
          <div>
            <div class="d-flex justify-content-between">
              <div>
                <h1>Requests :</h1>
              </div>
              <div>
                <a href="#" class="d-flex d-md-none  h-100 text-danger bg-white" onclick="displayADD()"><i class="bi bi-plus h-100  px-2" style=""></i></a>
                <a href="#" class="btn p-0 h-100 w-100 d-none d-md-flex" onclick="displayADD()" ><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px">Add Request</h4></a>
              </div>
            </div>
            <!-- FORM UPDATE -->
      
            <div class="h-100 mx-auto p-3 col-11 col-sm-8 mt-5"  style="" id="UPDATE">
              <form class="bg-white p-3 " action="" method="post" style="border: 2px solid gray;border-radius: 5px;" >
                <div class="d-flex justify-content-end">
                  <button type="button" class="plus text-danger " onclick="window.location.href='reqForBlood'" >X</i></button>
                </div>
                <div class="w-100 d-flex justify-content-center mb-2"><h3 style="color:rgba(219,138,222,1)">I need blood</h3></div>
                <div class="row">
                    <div class="mb-2 col-12 col-lg-6 "> 
                      <label for="name" class="form-label text-secondary">For </label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $req->name; ?>">
                      <small></small>
                    </div>
                    <div class="mb-2 col-12 col-lg-6 "> 
                      <label for="city" class="form-label text-secondary">City </label>
                      <input type="text" class="form-control" id="city" name="city" value="<?php echo $req->city; ?>" >
                      <small></small>  
                    </div>
                </div>
                   <div class="row d-flex justify-content-center my-4">
                    <div class="mb-2 col-12 col-lg-6 "> 
                      <label  class="form-label text-secondary d-flex justify-content-around">He needs </label>
                      <div class="d-flex justify-content-around">
                        <div class="">
                          <input type="radio" id="blood" name="type" value="Blood"  <?php echo ($req->type === 'Blood') ? 'checked': '';?> >
                          <label for="blood">Blood</label><br>
                        </div>    
                        <div class="">
                          <input type="radio" id="platelets " name="type" value="platelets"  <?php echo ($req->type === 'platelets') ? 'checked': '';?> >
                          <label for="platelets ">platelets </label><br>
                        </div>    
                      </div>
                     </div>
                    </div>               
                    <div class="row">
                        <div class="mb-2 col-12 col-lg-6 "> 
                            <label class="form-label text-secondary">Who has an </label>
                            <select  name="case" class="form-select" aria-label="Default select example">
                              <option  value="Emergency" <?php echo ($req->case === 'Emergency') ? 'selected': '';?> >Emergency</option>
                              <option  value="Chronic disease" <?php echo ($req->case === 'Chronic disease') ? 'selected': '';?> >Chronic disease</option>
                              <option  value="Surgery" <?php echo ($req->case === 'Surgery') ? 'selected': '';?> >Surgery</option>
                            </select>                        
                            <small></small>
                        </div>
                        <div class="mb-2 col-12 col-lg-6 "> 
                        <label class="form-label text-secondary">Groupe </label>             
                        <select  name="groupe" class="form-select" aria-label="Default select example">
                            <option  value="A+" <?php echo ($req->groupe === 'A+') ? 'selected': '';?> >A+</option>
                            <option  value="A-" <?php echo ($req->groupe === 'A-') ? 'selected': '';?> >A-</option>
                            <option  value="B+" <?php echo ($req->groupe === 'B+') ? 'selected': '';?> >B+</option>
                            <option  value="B-" <?php echo ($req->groupe === 'B-') ? 'selected': '';?> >B-</option>
                            <option  value="AB+" <?php echo ($req->groupe === 'AB+') ? 'selected': '';?> >AB+</option>
                            <option  value="AB-" <?php echo ($req->groupe === 'AB-') ? 'selected': '';?> >AB-</option>
                            <option  value="O+" <?php echo ($req->groupe === 'O+') ? 'selected': '';?> >O+</option>
                            <option  value="O-" <?php echo ($req->groupe === 'O-') ? 'selected': '';?> >O-</option>
                        </select>                       
                        <small></small>
                    </div>             
                  </div>
                  <div class="row">
                    <div class="mb-2 col-12 col-lg-6 "> 
                        <label for="phone" class="form-label text-secondary">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $req->phone; ?>">
                        <small></small>  
                    </div>
                    <div class="mb-2 col-12 col-lg-6 "> 
                        <label for="date" class="form-label text-secondary">Befor </label>
                        <input type="date" class="form-control" id="date" name="date" value="<?php echo $req->date; ?>">
                        <small></small>  
                    </div>
                  </div>
                  <form method="POST">
                    <input type="hidden" name="id" value="<?php echo  $req->id;?>">
                    <div class="w-100 d-flex justify-content-center my-5">
                       <input type="submit" class="btn text-white w-50" name="update" style="background-color: rgba(219,138,222,1)"   value="Save"> 
                    </div>
                  </form>
                </form>
              </div>
              <!-- END FORM UPDATE -->
             <div class="mt-4">
            </div>
          </div>
        </div>
      </div>

  <!-- Footer -->
  <footer class="footer text-center text-lg-start bg-light text-muted bg-danger">
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