<?php
require_once './autoload.php';
require_once './controllers/homeController.php';
$home = new homeController();

// $pages = ['Home','dashboard','signIn','signUp','requests','donors','logout',
//            'form-up','deleteDonor','form-ADD','pageDonor','tester','reqDonor','reqForBlood',
//            'updateReq','deleteReqForB','adminReq1','status','upReqDonat','addReqDonat',
//            'deleteReqDonat','adminReq2','library','article'];

$pages_admin=['Home','dashboard','signIn','requests','donors','logout','form-up',
             'deleteDonor','form-ADD','adminReq1','status','adminReq2','library','article','receiver',
             'ADD_receiver','UP_receiver','deleteReceiver'];

$pages_donor=['Home','signIn','logout','pageDonor','tester','reqDonor','reqForBlood',
             'updateReq','deleteReqForB','upReqDonat','addReqDonat','deleteReqDonat'
             ,'library','article','signUp'];

$pages_receiver=['Home','signIn','signUp','logout','pageReceiver'];

             if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){
              if(isset($_GET['page'])){
                if(in_array($_GET['page'],$pages_admin) || in_array($_GET['page'],$pages_donor )){
                    if(in_array($_GET['page'],$pages_donor) && $_SESSION['role'] == 'donor'){
                        $page = $_GET['page'];
                        $home->index($page);
                    } else if(in_array($_GET['page'],$pages_admin) && $_SESSION['role'] == 'admin'){
                        $page = $_GET['page'];
                        $home->index($page);
                    }else if(in_array($_GET['page'],$pages_receiver) && $_SESSION['role'] == 'receiver'){
                        $page = $_GET['page'];
                        $home->index($page);
                    }else{
                        include('views/includes/404.php');
                    }                       
                }else {
                include('views/includes/404.php');
                }
              }else{
                $home->index('Home');
              }
            }else if(isset($_GET['page'])
            ){
              $page = $_GET['page'];
              $home->index($page);
            }else{
            $home->index('Home');
            }












// if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){
//   if(isset($_GET['page'])){
//     if(in_array($_GET['page'],$pages_admin) || in_array($_GET['page'],$pages_donor )){
//         if(in_array($_GET['page'],$pages_donor) && $_SESSION['role'] == 'donor'){
//             $page = $_GET['page'];
//             $home->index($page);
//         } else if(in_array($_GET['page'],$pages_admin) && $_SESSION['role'] == 'admin'){
//             $page = $_GET['page'];
//             $home->index($page);
//           }else{
//             include('views/includes/404.php');
//         }


//     }else {
//     include('views/includes/404.php');
//     }
//  }else{
//     $home->index('signIn');
//  }
// }else if(isset($_GET['page'])
// ){
//   $page = $_GET['page'];
//   $home->index($page);
// }else{
// $home->index('Home');
// }

?>