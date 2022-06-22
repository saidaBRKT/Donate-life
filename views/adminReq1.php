<?php
// if(!isset($_SESSION["logged"])){
//   header('location: signIn');
//  die();
// }
$data = new requestsController();
$reqs = $data->getAllWaiting();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/formStyle.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <style>
      .sidebar-link{
        display:flex;
        align-items:center;
      }
      .sidebar-link .right-icon{
        display:inline-flex;
      }
      .sidebar-link[aria-expanded="true"] .right-icon{
        transform:rotate(180deg);
        transition:all ease 0.25s;
      }
    </style>
  </head>
<body>
<?php
  require_once "sidebar.php";
?>
<main class="h-100 mt-5 pt-5 bg-light d-flex justify-content-center align-item-center">
    <!-- content -->
      <div class="container">
      <div class="container ">
       <div>
       <div class="d-flex justify-content-between">
        <div>
        <h1>Requests For Blood :</h1>
        </div>
      </div>

      <div class="mt-4">
        
      <?php foreach($reqs as $req): ?>
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-12 col-md-6 fw-bold my-3 py-2 text-center text-md-start"> 
              N° : <?php echo $req['id'] ?>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-item-center px-0 my-3">
              <!-- <div class="text-center w-100 d-flex justify-content-end me-2"> -->


                <form method="POST" action="status" class="text-center col-5 col-md-3 d-flex justify-content-end me-2">
                  <input type="hidden" value="<?php echo $req['id'] ?>" name="idAccept">
                  <button class=" py-2 me-1 text-white text-decoration-none w-100 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Accept</button>
                  <!-- <button class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete
              </button> -->
                </form>
                 <form method="POST" action="status" class="text-center col-5 col-md-3 d-flex justify-content-end me-2">
                  <input type="hidden" value="<?php echo $req['id'] ?>" name="idRefuse"> 
                  <!-- <button class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete</a> -->
                  <button class=" py-2 me-1 text-white text-decoration-none w-100 h-100 my-auto bg-danger" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Refuse</button>
                  </button>
                </form>
              <!-- </div> -->
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                <th>Pour :</th>
                <td><?php echo $req['name'] ?></td>
                </tr>
                <tr>
                <th>Phone :</th>
                <td><?php echo $req['phone'] ?></td>
                </tr>
                <tr>
                <th>City :</th>
                <td><?php echo $req['city'] ?></td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                  <th>Type :</th>
                  <td><?php echo $req['type'] ?></td>
                </tr>
                <tr>
                  <th>Groupe sanguin :</th>
                  <td><?php echo $req['groupe'] ?></td>
                </tr>
                <tr>
                  <th>Date :</th>
                  <td><?php echo $req['date'] ?></td>
                </tr>
              </table>
            </div> 
            <div class="col-12 col-lg-4 my-auto">
              <table>
              <tr>
                <th>Case :</th>
                <td><?php echo $req['case'] ?></td>
                </tr>
                <tr>
                <th>Status :</th>
                <td><?php echo $req['status'] ?></td>
                </tr>
              </table>
            </div> 
          </div>
        </div>
         <!--  -->
        <?php endforeach; ?>
       <!--  -->

        <!--  -->
      
        <!--  -->
        
        <!--  -->
      </div>
    </div>
  </div>
      </div>
 
</main>
<script src="assets/js/my-bootstrap.js"></script>
<script src="./assets/js/formJS.js"></script>
</body>
</html>