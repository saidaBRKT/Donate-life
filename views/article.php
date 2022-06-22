<?php
$data = new requestsController();
$reqs = $data->getAllReqAccepted();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/formStyle.css">
    <link rel="stylesheet" href="./assets/css/style.css"> 
    <link rel="stylesheet" href="./assets/css/styleCaross.css">
    <link rel="stylesheet" href="./assets/css/my-bootstrap.css">
    <title>Article</title>
</head>
<style>
  .navig{
    /* background-color: #2D353C; */
    background: linear-gradient(-145deg, rgba(246,191,159,1) 0%, rgba(219,138,222,1) 100%);

}
 .signIN{
        border: 2px solid #FF2156;
        border-raduis:7px;
        color:#FF2156;
      }
      .signIN:hover{
        border: 2px solid #FFF;
        border-raduis:7px;
        background-color: #FF2156;
        color:#FFF;
      }
      .div{
    border: 1px solid gray;
    border-radius: 10px;
      }
      .title{
        color:rgba(246,191,159,1);
        padding:10px 0 10px 0;
      }
      .footer{
  background: linear-gradient(-145deg, rgba(246,191,159,1) 0%, rgba(219,138,222,1) 100%);
 }
 .clrReq{
  color:rgba(219,138,222,1);
  font-size:bolde;
 }

 .qst{
  background-color:rgb(220, 218, 218);
  color:black;
 }
 .qst:hover{
  background-color:rgba(219,138,222,1);
  color:white;
 }
 .qst a:hover{
  background-color:rgba(219,138,222,1);
  color:white;
 }
 hr{
  color:gray;
 }
 h4{
  color:rgba(219,138,222,1);
 }
 .list-unstyled{
  
 }
 .list-unstyled li, p{
  color:gray;
 }
 
</style>
<body>

<main class="container-fluid px-0 d-flex flex-column">

  <?php
  require_once "navbar_home.php";
?>

 <!-- content 3 -->

<!-- ::::::::::::::::::::::::::: -->
<div class="section-heading mt-5">
            <!-- <h6>Announcement</h6> -->
            <h4>What should you <em>Know</em> ?</h4>
          </div>
<div class="container d-flex justify-content-center align-item-center">

<div class="w-75">
<nav id="navbar-example2" class="navbar navbar-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <ul class="nav nav-pills d-flex flex-column w-100">
    <li class="nav-item btn w-100 mb-2 qst">
      <a class="nav-link text-secondary fw-bold" href="#un">What is blood donation?</a>
    </li>
    <li class="nav-item btn w-100 mb-2 qst">
      <a class="nav-link text-secondary fw-bold" href="#deux">Are there any risks?</a>
    </li>
    <li class="nav-item btn w-100 mb-2 qst">
      <a class="nav-link text-secondary fw-bold" href="#trois">Why donate blood?</a>
    </li>
    <li class="nav-item btn w-100 mb-2 qst">
      <a class="nav-link text-secondary fw-bold" href="#quatre">What are the benefits of donating blood?</a>
    </li>
    <li class="nav-item btn w-100 mb-2 qst">
      <a class="nav-link text-secondary fw-bold" href="#cinq">Who can donate blood?</a>
    </li>
    <li class="nav-item btn w-100 mb-2 qst">
      <a class="nav-link text-secondary fw-bold" href="#six">What are the recommended precautions after donating blood?</a>
    </li>
  </ul>
</nav>
<div class="mt-5" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <div class="mt-5 division">
  <h4 id="un" class="w-100 text-center fw-bold">What is blood donation?</h4>
  <p class="text-center mt-4">
     Le sang est un liquide vital, indispensable au fonctionnement du corps humain,
    il ne peut être ni fabriqué artificiellement ni synthétisé. On peut facilement
    le prélever sur un individu sain pour le transfuser à un individu malade. 
    Le don du sang est le seul moyen nécessaire pour couvrir les besoins des malades
    pour rester en vie. La quantité de sang prélevée doit être au moins égale 
    à environ 450 ml, équivalent de (7%) du volume global de sang humain normal, 
    et la durée du prélèvement est habituellement entre 5 et 15 minute.
  </p>  
  <hr class="w-50 mx-auto">       
  </div>
  <div class="mt-5 division">
  <h4 id="deux" class="w-100 text-center fw-bold">Are there any risks?</h4>
  <p class="text-center mt-4">
  Donors are not at risk of being infected, because the collection material is sterile,
  single-use, eliminates any risk of contamination and the quantity of blood collected
  is not detrimental to their health.
  <hr class="w-50 mx-auto">       
  </p>
  </div>
  <div class="mt-5 division">
  <h4 id="trois" class="w-100 text-center fw-bold">Why donate blood?</h4>
  <p class="text-center mt-4">
    <p>   Giving blood is an excellent humanitarian service to save human lives when:</p>
  <ul class="list-unstyled">
     
        <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Accidents</li>
        <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Surgery (Cardiac surgery, vascular surgery, organ transplantation and others)</li>
        <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">For women with pregnancy complications (such as ectopic pregnancy or bleeding before, during or after birth)</li>
        <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">For the treatment of the sick (genetic blood diseases, cancer, kidney failure, thalassemia…</li>
        <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Every blood donation can save three lives.</li>
      </ul>
  </p>
  <hr class="w-50 mx-auto">       

  </div>
  <div class="mt-5 division">
  <h4 id="quatre" class="w-100 text-center fw-bold">What are the benefits of donating blood?</h4>
  <p class="text-center mt-4"><ul class="list-unstyled">
            <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Help stimulate blood circulation.</li>
            <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Help stimulate bone marrow and regenerate blood cells
              (red blood cells, white blood cells, platelets).</li>
            <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Reducing the amount of iron in your body, or too much iron
              iron in the blood can accelerate the oxidation process of cholesterol and
              make the blood thicker, which increases the risk of diseases
              cardiovascular and infarction.</li>
            <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">People who donate blood at least once a year,
              are the least vulnerable to infection with circulatory diseases and
              leukaemia.</li>
          </ul></p>
          <hr class="w-50 mx-auto">       
          </div>       
<div class="mt-5 division">
  <h4 id="cinq" class="w-100 text-center fw-bold">Who can donate blood?</h4>
  <p class="text-center mt-4">
            <ul class="list-unstyled">
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Anyone in good health.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">You must be between 18 and 60 years old.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Weigh more than 50 kg.</li>
            </ul>
         <p>There are exceptional cases temporarily preventing blood donation, among them:</p>   
            
            <ul class="list-unstyled">
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">After certain vaccines or taking certain medications: Time limit of 3 weeks.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">After dental treatment, dental avulsion, La Hijama or extraction by cupping: Time limit to be respected 6 months.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">In the case of tuberculosis: Deadlines to be respected 5 years after recovery.</li>
            </ul>

  </p>
  <hr class="w-50 mx-auto">       
</div>
  <div class="mt-5 division">
  <h4 id="six" class="w-100 text-center fw-bold">What are the recommended precautions after donating blood?</h4>
  <p class="text-center mt-4">
          <ul class="list-unstyled">
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Take time to rest well and have a light meal.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">keep the dressing covering the puncture site on for 1 to 3 hours.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Drink plenty of fluids more than usual during both
                a few hours after the donation.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">Avoid strenuous physical activity for 24 hours.</li>
              <li><img src="assets/images/blood-icon.png"class="me-3" alt="" width="10px" height="10px">If you are a smoker, do not smoke within two hours,
                because tobacco stimulates the blood to go to the lungs, causes a state
                dizziness and pallor.</li>
            </ul>
  </p>
  <hr class="w-50 mx-auto">       
</div>
</div>
</div>
</div>
<!-- :::::::::::::::::::::::::::: -->

</body>
</html>