<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $exitReqs = new requestsController();
        $exitReqs->deleteReq();
    }else Redirect::to('receiver_Requests');