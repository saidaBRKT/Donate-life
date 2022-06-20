<?php
require_once './autoload.php';
require_once './controllers/homeController.php';
// require_once './Views/alert.php';

 $home = new homeController();

 $pages = ['Home','dashboard','signIn','signUp','requests','donors','patients','logout','test','dashboard-d','requests-d','form-up','deleteDonor','form-ADD','pageDonor','tester','reqDonor','reqForBlood','updateReq','deleteReqForB','adminReq1','status','upReqDonat','addReqDonat','deleteReqDonat','adminReq2'];

  if(isset($_GET['page'])){
      if(in_array($_GET['page'],$pages)){
      $page = $_GET['page'];
      $home->index($page);
      }else {
      include('./views/includes/404.php');
      }
    }else{
      $home->index('Home');
    }
?>