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
    <!--  -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/styleCaross.css">
    <!--  -->
    
    <!-- <link rel="stylesheet" href="./assets/css/styleDonor.css">   -->
    <link rel="stylesheet" href="./assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>DonateLife</title>
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
 
</style>
<body>

<main class="container-fluid px-0 d-flex flex-column">

  <?php
  require_once "views/includes/navbar_home.php";
?>
  <!--End Navbar -->

  <!-- content 1 -->
  <div class="container-fluid d-flex flex-column flex-md-row mt-5 px-0 h-100">
    <div class="c1 d-flex justify-content-center align-item-center w-100 w-md-50 position-relative ">   
      <div class="left position-absolute bottom-0 start-0 d-none d-lg-block ">
        <img src="assets/images/banner-left-dec.png" alt="left" height="300px" width="120px"> 
      </div> 
      <div class="w-75 h-100 text-center text-md-start  d-lg-flex justify-content-center align-item-center"> 
        <h1 class="my-auto">
          There are a simple   <br>
          Things that can<br>
          <p>SAVE LIFES</p><br>
          <a href="#"><button class="btn-block btn-lg ">JOIN US NOW !</button></a>
        </h1> 
      </div>
    </div>
    <div class="c2 w-100 w-md-50">
    <img src="assets/images/Blood donation-pana (1).svg" alt="">
    </div>
  </div>
  <!-- End content 1 -->

  <!-- <div class="container-fluid mt-5 h-75 d-flex align-item-start ps-0">
    <div class="d-none d-lg-block">
      <img src="assets/images/testimonials-left-dec.png" alt="left" height="250px" width="600px"> 
    </div>
  </div>  -->

  <!-- content 2 -->
  <!-- <h1 style="color:rgba(219,138,222,1)" class="text-center mb-5">What should you know ?</h1> 
  <div class="container">
    <div class="row px-3">
      <div class="div mx-auto col-11 col-md-10 col-lg-5 my-3 mx-auto d-flex flex-column flex-lg-row">
        <div class="col-10 mx-auto col-lg-2 d-flex justify-content-center align-item-center">
            <img src="assets/images/blood_icon_1.svg" class="my-auto mx-auto" alt="icone-1" width="90px" height="90px">
        </div>
        <div class="col-10 mx-auto">
          <h2 class="title">Le don de sang, c’est quoi ?</h2>
          <p>Le sang est un liquide vital, indispensable au fonctionnement du corps humain,
            il ne peut être ni fabriqué artificiellement ni synthétisé. On peut facilement
            le prélever sur un individu sain pour le transfuser à un individu malade. 
            Le don du sang est le seul moyen nécessaire pour couvrir les besoins des malades
            pour rester en vie. La quantité de sang prélevée doit être au moins égale 
            à environ 450 ml, équivalent de (7%) du volume global de sang humain normal, 
            et la durée du prélèvement est habituellement entre 5 et 15 minute. 
          </p>   
        </div>
      </div>
      <div class="div mx-auto col-11 col-md-10 col-lg-5 my-3 mx-auto  d-flex flex-column flex-lg-row">
      <div class="col-10 mx-auto col-lg-2 d-flex justify-content-center align-item-center">
            <img src="assets/images/blood-icon-6.webp" class="my-auto mx-auto" alt="icone-1" width="90px" height="90px">
        </div>
        <div class="col-10 mx-auto">
          <h2 class="title">Pourquoi donner du sang ?</h2>
          <p> 
            <ul>
            Donner du sang, est un excellent service humanitaire pour sauver des vies humaines lors :
            <li>D’accidents</li>
            <li>Des Chirurgies (La chirurgie cardiaque, la chirurgie vasculaire, la transplantation d’organes et autres)</li>
            <li>Pour les femmes présentant des complications de la grossesse (comme une grossesse extra-utérine ou une hémorragie avant, pendant ou après la naissance)</li>
            <li>Pour le traitement des malades (maladies du sang génétiques, cancer, l’insuffisance rénale, thalassémie…</li>
            <li>Chaque don de sang peut sauver trois vies.</li>
            </ul>
          </p>   
        </div>
      </div>
      <div class="div mx-auto col-11 col-md-10 col-lg-5 my-3 mx-auto d-flex flex-column flex-lg-row">
      <div class="col-12 col-lg-2 d-flex justify-content-center align-item-center">
            <img src="assets/images/blood_icon_2.svg" class=" my-auto mx-auto" alt="icone-1" width="90px" height="90px">
        </div>
        <div class="col-10">
          <h2 class="title">Quels sont les bienfaits du don de sang?</h2>
          <ul>
            <li>Contribuer à stimuler la circulation sanguine.</li>
            <li>Contribuer à stimuler la moelle osseuse et régénérer des cellules sanguines 
              (globules rouges, globules blancs, plaquettes).</li>
            <li>Réduire le volume de fer présent dans votre corps, or un taux trop important 
              de fer dans le sang peut accélérer le processus d’oxydation du cholestérol et 
              rendre le sang plus épais, ce qui accroît le risque de maladies 
              cardio-vasculaires et d’infarctus.</li>
            <li>Les personnes qui donnent leurs sangs au moins une fois chaque année, 
              sont Les moins vulnérables à l’infection aux maladies circulatoires et de 
              leucémie.</li>
          </ul>
          <p> 
          </p>   
        </div>
      </div>
      <div class="div mx-auto col-11 col-md-10 col-lg-5  my-3 mx-auto d-flex flex-column flex-lg-row">
      <div class="col-12 col-lg-2 d-flex justify-content-center align-item-center">
            <img src="assets/images/blood_icon_4.svg" class="my-auto mx-auto" alt="icone-1" width="90px" height="90px">
        </div>
        <div class="col-10">
          <h2 class="title">Qui peut donner son sang?</h2>
          <p> 
            <ul>
              <li>Toute personne en bonne santé.</li>
              <li>Il faut être âgé de 18 à 60 ans.</li>
              <li>Peser plus de 50 kg.</li>
            </ul>
            Il y’a des cas exceptionnels empêche temporairement le don de sang, parmi eux :
            <ul>
              <li>Après certains vaccins ou La prise de certains médicaments : Délai à respecter 3 semaines.</li>
              <li>Après les soins dentaires, une avulsion dentaire, La Hijama ou l’extraction par ventouses : Délai à respecter 6 mois.</li>
              <li>Au cas de la tuberculose : Délais à respecter 5 ans après la guérison.</li>
            </ul>
          </p>   
        </div>
      </div>
      <div class="div col-12 col-md-10 my-3 mx-auto d-flex flex-column flex-lg-row">
      <div class="col-12 col-lg-2 d-flex justify-content-center align-item-center">
            <img src="assets/images/blood_icon_5.svg" class="my-auto mx-auto" alt="icone-1" width="90px" height="90px">
        </div>
        <div class="col-12 col-lg-10">
          <h2 class="title">Quelles sont les précautions recommandées après un don de sang ?</h2>
          <p> 
          <ul>
              <li>Prenez le temps de bien vous reposer et prenez un repas léger.</li>
              <li>garder le pansement qui recouvre le site de ponction pendant 1 à 3 heures.</li>
              <li>Buvez une grande quantité de liquides plus que d’habitude pendant les deux 
                prochaines heures après le don.</li>
              <li>Éviter toute activité physique intense pendant 24 heures.</li>
              <li>Si vous êtes un fumeur, ne fumez pas dans les deux heures qui suivent, 
                car le tabac stimule le sang d’aller vers les poumons, provoquant un état 
                de vertige et la pâleur.</li>
            </ul>
          </p>   
        </div>
      </div>
    </div>
  </div> -->

  <!--  -->
  <section class="testimonials mb-5" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Announcement</h6>
            <h4>Requests For <em>Help</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
          <?php foreach($reqs as $req): ?>  
          <div class="item">
              <!-- <p><h1><?php echo $req['id'] ?></h1> “just think about TemplateMo if you need free CSS templates for your website”</p> -->
                <!-- <h4>Catherine Walk</h4>
                <span>CEO &amp; Founder</span>
                <img src="assets/images/quote.png" alt="">
                <a href="index.html" class="btn btn-primary">acceder</a> -->
                <p class="w-75">
                <span class="clrReq"><?php echo $req['name'] ?></span> needs donors for a <span class="clrReq"><?php echo $req['type'] ?></span> donation From group <span class="clrReq"><?php echo $req['groupe'] ?></span> Who has an <span class="clrReq"><?php echo $req['case'] ?></span> in <span class="clrReq"><?php echo $req['city'] ?></span> Before <span class="clrReq"><?php echo $req['date'] ?></span>
                </p>
                <img src="assets/images/quote.png" alt="">
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- content 4 -->
  <div class="container-fluid d-flex flex-column flex-md-row mt-5 px-0 h-100 mb-5">
    <div class="c2 w-100 w-md-50">
      <img src="assets/images/Enthusiastic-pana.svg" alt="">
    </div>
    <div class="c1 d-flex justify-content-center align-item-center w-100 w-md-50">    
      <div class="w-75 h-50 my-auto text-center   d-lg-flex justify-content-center align-item-center"> 
        <div class="my-auto text-center">
         <span class="title fs-1">Be</span><br>
         <span style="color:rgba(219,138,222,1)" class="fs-1 fw-bold">Hero</span><br>
         <span class="title fs-1">Now</span><br>
         <a href="signIn"><button class="mt-5 btn-block btn-lg ">JOIN US NOW !</button></a>
        </div> 
      </div>
    </div>
  </div>    

  <!-- Footer -->
  <?php
  require_once "views/includes/footer_Home.php";
?>
  <!-- end Footer-->   
    </main>  
<script src="assets/js/my-bootstrap.js"></script> 

<!--  -->
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>
     
     $('.owl-service-item').owlCarousel({
		items:4,
		loop:true,
		dots: true,
		nav: false,
		autoplay: true,
		margin:15,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:4
			  }
		  }
	  })

	$('.owl-testimonials').owlCarousel({
		items:3,
		loop:true,
		dots: true,
		nav: false,
		autoplay: true,
		margin:15,
		  responsive:{
			  0:{
				  items:1
			  },
			  600:{
				  items:2
			  },
			  1000:{
				  items:3
			  }
		  }
	  })

    </script>
    <script>
  const A1=document.getElementById("A1");
  const A2=document.getElementById("A2");
  const A3=document.getElementById("A3");
  const A4=document.getElementById("A4");
  const A5=document.getElementById("A5");
  function A1(){
    A1.style.display="block";
    A2.style.display="none";
    A3.style.display="none";
  }
  function A2(){
    A1.style.display="none";
    A2.style.display="block";
    A3.style.display="none";
  }
  function A3(){
    A1.style.display="none";
    A2.style.display="none";
    A3.style.display="block";
  }

    </script>
</body>
</html>