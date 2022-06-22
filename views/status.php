<?php
if(isset($_POST['idAccept'])){
  $exitReqs = new requestsController();
  $exitReqs->updateAcceptStat();
}
if(isset($_POST['idRefuse'])){
  $exitReqs = new requestsController();
  $exitReqs->updateRefuseStat();
}
if(isset($_POST['Accept'])){
  $exitReqs = new donatController();
  $exitReqs->updateAcceptStat();
}
if(isset($_POST['Refuse'])){
  $exitReqs = new donatController();
  $exitReqs->updateRefuseStat();
}