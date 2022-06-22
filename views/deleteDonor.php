<?php

  if(isset($_POST['id'])){
    $exitDonors = new donorsController();  
    $id_U = $exitDonors->getOne();
    $id=$id_U->id_user;
    $exitDonors->deleteDonors();
    $user = new userController();  
    $user->deleteUser($id);
  }
?> 