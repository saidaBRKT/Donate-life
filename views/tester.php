<?php  
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="Assets/CSS/my-bootstrap.css" />
  <link rel="stylesheet" href="./assets/css/test.css">
  <link rel="stylesheet" href="./assets/css/styleDonor.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Test</title>
</head>

<body>
<?php require_once "views/includes/sidebar-donor.php"; ?>
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
<?php require_once "views/includes/footer_donor.php"; ?>
  <!-- end Footer--> 
</div>
<script src="./assets/js/test.js"></script>
<script src="./assets/js/my-bootstrap.js"></script>
</body>
</html>