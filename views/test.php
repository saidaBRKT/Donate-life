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
    <link rel="stylesheet" href="assets/css/my-bootstrap.css">
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
    <?php
  require_once "sidebar-donor.php";
?>
    <!-- End navbar -->
    <main class="mt-5 pt-5 h-100  d-flex justify-content-center align-item-center">
  <div class="container mx-5 mt-5 ">
    <div>
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

    <!------------------------ footer  ------------------------>
</div>
</div>
</main>
    <script src="./assets/js/test.js"></script>
    <script src="./assets/js/my-bootstrap.js"></script>
  </body>
</html>