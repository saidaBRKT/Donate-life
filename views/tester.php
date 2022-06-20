<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="./assets/css/test.css" rel="stylesheet" />
    <link rel="stylesheet" href="Assets/CSS/my-bootstrap.css" />
    <link rel="shortcut icon" href="Assets/Images/Protect.ico" type="image/x-icon">
    <!--  -->
    <link rel="stylesheet" href="./assets/css/test.css">

    <link rel="stylesheet" href="./assets/css/styleDonor.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/formStyle.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--  -->
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
    <title>Test</title>
  </head>

  <body>
    <!-- Navbar -->
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
                <a class="nav-link  my-auto text-center" aria-current="page" href="pageDonor">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-center" href="tester">Test</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="w-100"><a class="dropdown-item" href="reqDonor">To donate blood</a></li>
                  <li class="w-100"><hr class="dropdown-divider"></li>
                  <li class="w-100"><a class="dropdown-item" href="reqForBlood">For blood</a></li>
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
    <!-- End navbar -->
    <!-- <main class="w-100 h-100  d-flex justify-content-center align-item-center"> -->
  <!-- <div class="container "> -->
<div class="mt-5">
    <div class="test me-5">
     <section class="stepper">
      <h1 class="select">Informations</h1>
      <h1>Questionnaire</h1>
      <h1>Résultats</h1>
    </section>

    <!---------------------------------------- stepper navbar ------------------------------------------->

    <!------------------------------------- start Préambule section  ------------------------>

    <section class="Préambule">
      <h1>Preamble</h1>

      <p>
      The application is free and was developed to help citizens help each other by 
      donating blood and to significantly reduce the time spent searching for the right 
      donor and the availability of the blood needed.
      </p>
      <p></p>

      <hr />
    </section>

    <button class="start-btn">Démarrer le test</button>
    <!------------------------------------- end  Préambule  section  ------------------------>

    <section class="questionnaire col-12 col-md-10">
      <div class="progress">
        <h3 class="main-clr"><span class="question-number">1</span> /10</h3>
        <div class="progress__bar">
          <div class="bar"></div>
        </div>
      </div>

      <div class="animation">
        <h1 class="question"></h1>

        <div class="answer-inputs"></div>

        <div class="btn-container">
          <button class="previous">Précédent</button>
          <button class="next">Suivant</button>
        </div>
      </div>
    </section>
    </div>
    <!------------------------ footer  ------------------------>
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
</div>
<!-- </div> -->
<!-- </main> -->
    <script src="./assets/js/test.js"></script>
    <script src="./assets/js/my-bootstrap.js"></script>
  </body>
</html>