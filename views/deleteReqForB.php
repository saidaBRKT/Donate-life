<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $exitReqs = new requestsController();
        $exitReqs->deleteReqs();
    }else Redirect::to('reqForBlood');