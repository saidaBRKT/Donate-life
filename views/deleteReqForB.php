<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $exitReqs = new requestsController();
        $exitReqs->deleteReqs();
        // echo $_POST['id'];
    }else Redirect::to('reqForBlood');

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     // $newDonor = new donorsController();
    //     // $newDonor->deleteDonors();
    //     echo $_POST['id'];
    //    }