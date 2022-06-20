<?php
if(isset($_POST['idAccept'])){
  // echo 'ok';

 $exitReqs = new requestsController();
//  echo $_POST['idAccept'];
 $exitReqs->updateAcceptStat();
}


if(isset($_POST['idRefuse'])){
  // echo 'ok';

 $exitReqs = new requestsController();
//  echo $_POST['idRefuse'];
 $exitReqs->updateRefuseStat();
}

/////////////////////
if(isset($_POST['Accept'])){
  // echo 'ok';

 $exitReqs = new donatController();
//  echo $_POST['idAccept'];
 $exitReqs->updateAcceptStat();
}


if(isset($_POST['Refuse'])){
  // echo 'ok';

 $exitReqs = new donatController();
//  echo $_POST['idRefuse'];
 $exitReqs->updateRefuseStat();
}