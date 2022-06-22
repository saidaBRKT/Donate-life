<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
$data = new requestsController();
$reqs = $data->getAllRequests($_SESSION['id']);
if(isset($_POST['add'])){
  $newReq=new requestsController();
  $newReq->addReq_Receiver($_SESSION['id']);
}
$dataReqs = new requestsController();
$nbrReqs =$dataReqs->CountAllReqs($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="./assets/css/styleDonor.css"><title>Document</title>
</head>
<body>
<?php require_once "views/includes/sidebar-receiver.php"; ?>
<main class="container-fluid px-0 h-100 bg-light pb-0" >
  <!-- content -->
  <div class="container" style="min-height:70vh">
    <div class="container">
      <div>
        <div class="d-flex justify-content-between">
          <div>
            <h1>Requests :</h1>
          </div>
          <div class="py-2">
          <a href="#" class="py-1 d-md-none text-danger bg-white" onclick="displayADD()"><i class="bi bi-plus h-50 px-2" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px"></i></a>
          <a href="#" class="btn p-0 h-100 w-100 d-none d-md-flex" onclick="displayADD()" ><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px">Add Request</h4></a>
        </div>
      </div>
      <!-- FORM ADD -->
      <div class="add h-100 mx-auto p-3 col-11 col-sm-8 mt-5"  style="display:none;" id="add">
        <form class="bg-white p-3 " action="" method="post" style="border: 2px solid gray;border-radius: 5px;" >
          <div class="d-flex justify-content-end">
            <button type="button" class="plus text-danger " onclick="window.location.href='reqForBlood'" >X</i></button>
          </div>
          <div class="w-100 d-flex justify-content-center mb-2"><h3 style="color:rgba(219,138,222,1)">I need blood</h3></div>
            <div class="row">
              <div class="mb-2 col-12 col-lg-6 "> 
                <label for="name" class="form-label text-secondary">For </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                <small></small>
              </div>
              <div class="mb-2 col-12 col-lg-6 "> 
                <label for="city" class="form-label text-secondary">City </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                <small></small>  
              </div>
            </div>
            <div class="row d-flex justify-content-center my-4">
              <div class="mb-2 col-12 col-lg-6 "> 
                <label  class="form-label text-secondary d-flex justify-content-around">He needs </label>
                <div class="d-flex justify-content-around">
                  <div class="">
                    <input type="radio" id="blood" name="type" value="Blood">
                    <label for="blood">Blood</label><br>
                  </div>    
                  <div class="">
                    <input type="radio" id="platelets " name="type" value="platelets ">
                    <label for="platelets ">platelets </label><br>
                  </div>    
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-2 col-12 col-lg-6 "> 
                <label class="form-label text-secondary">Who has an </label>
                <select  name="case" class="form-select" aria-label="Default select example">
                    <option  value="Emergency">Emergency</option>
                    <option  value="Chronic disease">Chronic disease</option>
                    <option  value="Surgery">Surgery</option>
                </select>                        
                <small></small>
              </div>
              <div class="mb-2 col-12 col-lg-6 "> 
                <label class="form-label text-secondary">Groupe </label>             
                <select  name="groupe" class="form-select" aria-label="Default select example">
                    <option  value="A+">A+</option>
                    <option  value="A-">A-</option>
                    <option  value="B+">B+</option>
                    <option  value="B-">B-</option>
                    <option  value="AB+">AB+</option>
                    <option  value="AB-">AB-</option>
                    <option  value="O+">O+</option>
                    <option  value="O-">O-</option>
                </select>                       
                <small></small>
              </div>             
            </div>
            <div class="row">
              <div class="mb-2 col-12 col-lg-6 "> 
                <label for="phone" class="form-label text-secondary">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter City">
                <small></small>  
              </div>
              <div class="mb-2 col-12 col-lg-6 "> 
                <label for="date" class="form-label text-secondary">Befor </label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Enter City">
                <small></small>  
              </div>
            </div>
            <div class="w-100 d-flex justify-content-center my-5">
              <input type="submit" class="btn text-white w-50" name="add" style="background-color: rgba(219,138,222,1)"   value="Save"> 
            </div>
          </div>
        </form>
      </div> 
      <!-- End FORM ADD -->
<?php if($nbrReqs[0] == 0) { ?>
  <div style="min-height:70vh"class="d-flex">
    <div class="container w-75 my-auto d-flex justify-content-center alight-item-center" style="height:300px;background-color:#d4d3d4">
     <div class="d-flex justify-content-center alight-item-center">
      <h1 class="my-auto h-25">No Request</h1>
     </div>
    </div>
  </div>
<?php }else { ?>
  <div class="mt-4">       
    <?php foreach($reqs as $req): ?>
      <div class="container bg-white mb-3" style="border-radius:7px">
        <div class="row" style="border-bottom:1px solid gray">
          <div class="col-6 fw-bold my-3 py-2"> 
            N° : <?php echo $req['id'] ?>
          </div>
          <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
            <form method="POST" action="upReq_Receiver" class="text-center w-100 d-flex justify-content-end">
              <input type="hidden" value="<?php echo $req['id'] ?>" name="id_Receiver">
              <button class="my-auto d-flex  border-0 bg-white p-0">
                <img src="assets/images/Edit.png" alt="logo" width="50px" height="50px">
              </button>
            </form >
            <form method="POST" action="deleteReq_Receiver" class="text-center d-flex justify-content-end">
              <input type="hidden" value="<?php echo $req['id'] ?>" name="id"> 
              <button class="w-100 my-auto btn d-flex">
                <img src="assets/images/poubelle.png" alt="logo" width="40px" height="40px">
            </button>
            </form>
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
    <?php endforeach; ?>
    </div>
<?php }?>
</div>
</div>
</div>
<!-- Footer -->
<?php require_once "views/includes/footer_donor.php"; ?>
  <!-- end Footer--> 
</main>
<script src="./assets/js/my-bootstrap.js"></script>
<script src="./assets/js/formJS.js"></script>
</body>
</html>