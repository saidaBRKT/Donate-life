<?php
// if(!isset($_SESSION["logged"])){
//   header('location: signIn');
//  die();
// }
  if(isset($_POST['cin'])){
    $exit = new ReceiverController();  
    $id_U = $exit->getOne();
    $id=$id_U->id_user;
    $exit->deleteReceiver();
    $user = new userController();  
    $user->deleteU($id);
  }
?> 