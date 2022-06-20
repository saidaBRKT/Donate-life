<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $exitReqs = new donatController();
        $exitReqs->deleteReqs();
        // echo $_POST['id'];
    }else Redirect::to('reqDonor');

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     // $newDonor = new donorsController();
    //     // $newDonor->deleteDonors();
    //     echo $_POST['id'];
    //    }
