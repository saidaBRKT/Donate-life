<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
if(isset($_POST['id'])){
  $exitReqs = new donatController();
  $exitReqs->deleteReqs();
}
$newUser=new userController();
$idUser = $newUser->getOneUser($_SESSION['email']);
if(isset($_POST['add']))
  {
    $newDonor = new donorsController();
    $newDonor->addUD($idUser->id);
  }
$newDonor = new donorsController();
$profile=$newDonor->allProfile($idUser->id);

$data = new donatController();
$reqs = $data->getAllRequests($_SESSION['id']);

$data = new donatController();
$nbr =$data->CountAllReqs($_SESSION['id']);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="./assets/css/styleDonor.css">
    <title>Request for donation blood</title>
</head>
<body>
<?php require_once "views/includes/sidebar-donor.php"; ?>
<main class="container-fluid px-0 pt-5 bg-light">
  <?php if($profile == null) : ?>
  <div class="w-100 text-center ">
    <h4 class="fw-bold text-secondary">Please complete your information :</h4>
  </div>
  <div class=" mt-5 h-70 mx-auto p-3 col-11 col-lg-8"   id="add">
    <form class="bg-light p-3 " method="POST" style="border: 2px solid #FF2156;border-radius: 20px;" >
      <div class="d-flex justify-content-end">
        <button type="button" class="plus text-danger " onclick="window.location.href='donors'" >X</i></button>
      </div>
      <input type="hidden" name="role" value="donor">
      <div class="d-flex flex-column flex-lg-row justify-content-between ">
        <div class="mb-2 col-12 col-lg-5"> 
          <label for="name" class="form-label text-secondary">Name :</label>
          <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
          <small></small>
        </div>
        <div class="mb-2 col-12 col-lg-5"> 
          <label for="age" class="form-label text-secondary">Age </label>
          <input type="number" class="form-control" id="age" name="age"  placeholder="Enter age">
          <small></small>
        </div>
      </div>
      <div class="d-flex flex-column flex-lg-row justify-content-between">
        <div class="mb-2 col-12 col-lg-5"> 
          <label for="phone" class="form-label text-secondary">Phone :</label>
          <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter phone">
          <small></small>
        </div>
        <div class="mb-2 col-12 col-lg-5 "> 
          <label class="form-label text-secondary">Blood Type </label>             
          <select  name="bloodType" class="form-select" aria-label="Default select example">
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
      <div class="row d-flex justify-content-center my-4">
        <div class="mb-2 col-12 col-lg-6 "> 
          <label  class="form-label text-secondary d-flex justify-content-around">Gender </label>
          <div class="d-flex justify-content-around">
            <div class="">
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label><br>
            </div>    
            <div class="">
                <input type="radio" id="female " name="gender" value="Female ">
                <label for="female">Female </label><br>
            </div>    
          </div>
        </div>
      </div>
    <div class="d-flex justify-content-center">
      <input type="submit" class="btn text-white w-50 " name="add" style="background-color: #FF2156"   value="Save"> 
    </div>
  </form>
</div>
<?php endif; ?>
<?php if($profile != null) { ?>
<div class="mt-4"style="min-height:70vh">
  <div class="w-75 mx-auto mb-3">
    <div class="d-flex justify-content-between">
      <div>
        <h1>Requests :</h1>
      </div>
      <div class="py-2">
        <a href="addReqDonat" class="py-1 d-md-none text-danger bg-white" onclick="displayADD()"><i class="bi bi-plus h-50 px-2" style="color:addReqDonatFF2156;border:1px solid #FF2156;border-radius:5px"></i></a>
        <a href="addReqDonat" class="btn p-0 h-100 w-100 d-none d-md-flex" onclick="displayADD()" ><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px">Add Request</h4></a>
      </div>
    </div>
  </div>
<?php if($nbr[0] == 0) { ?>
<div style="min-height:70vh"class="d-flex">
  <div class="container w-75 my-auto d-flex justify-content-center alight-item-center" style="height:300px;background-color:#d4d3d4">
    <div class="d-flex justify-content-center alight-item-center">
      <h1 class="my-auto h-25">No Request</h1>
    </div>
  </div>
</div>
<?php }else { ?>
  <?php foreach($reqs as $req): ?>
    <div class="bg-white container mb-3 w-75" style="border-radius:7px">
      <div class="row" style="border-bottom:1px solid gray;height:70px">
        <div class="col-6 fw-bold my-3 py-2"> 
          N° : <?php echo $req['id'] ?>
        </div>
        <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
          <form method="POST" action="upReqDonat" class="text-center w-100 d-flex justify-content-end">
            <input type="hidden" value="<?php echo $req['id'] ?>" name="id">
            <button class="my-auto d-flex  border-0 bg-white p-0">
              <img src="assets/images/Edit.png" alt="logo" width="50px" height="50px">
            </button>
          </form >
          <form method="POST"  class="text-center d-flex justify-content-end">
            <input type="hidden" value="<?php echo $req['id'] ?>" name="id">
            <button type="submit "class="w-100 my-auto btn d-flex">
              <img src="assets/images/poubelle.png" alt="logo" width="40px" height="40px">
            </button>
          </form>
        </form>
      </div>
    </div> 
    <div class="row d-flex ms-0 px-0 py-3">
        <div class="col-12 col-lg-6">
          <table>
            <tr>
              <th>Name :</th>
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
          <div class="col-12 col-lg-6 my-auto">
            <table>   
              <tr>
                <th>Groupe sanguin :</th>
                <td><?php echo $req['groupe'] ?></td>
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
<?php } }?>

<!-- Footer -->
<?php require_once "views/includes/footer_donor.php"; ?>
  <!-- end Footer--> 
</main>
<script src="./assets/js/my-bootstrap.js"></script>
<script src="./assets/js/formJS.js"></script>
</body>
</html>