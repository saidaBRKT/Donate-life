<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $newUser=new userController();
  $newUser->addUsers($_POST['role']);

  $idUser = $newUser->getOneUser($_POST['email']);
  $newDonor = new donorsController();
  $newDonor->addDonors($idUser->id);
 }
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
  
  </head>
<body>
<?php
  require_once "sidebar.php";
?>
<main class="mt-5 pt-5 bg-light d-flex justify-content-center align-item-center">
  <div class="container mx-5 my-5">
    <div>
      <div class="w-100 text-center ">
        <h4 class="fw-bold">Add Donor :</h4>
      </div>
      <!--  -->
<div class="w-75 mt-5 h-70 mx-auto p-3 col-11 col-sm-6"  style="border: 2px solid #FF2156;border-radius: 20px;" id="add">
<form class="bg-light p-3 " action="" method="POST" id="myForm">
                <div class="d-flex justify-content-end">
                  <button type="button" class="plus text-danger " onclick="window.location.href='donors'" >X</i></button>
                </div>
                <input type="hidden" name="role" value="donor">
                <div class="d-flex justify-content-between">
                  <div class="mb-2 col-5"> 
                    <label for="name" class="form-label text-secondary">Name :</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
                    <small></small>
                  </div>
                  <div class="mb-2 col-5">
                    <label for="cin" class="form-label text-secondary">CIN :</label>
                    <input type="text" class="form-control" id="cin" name="cin"  placeholder="Enter your username">
                    <small></small>
                  </div>
                </div>

                <div class="d-flex justify-content-between">
                <div class="mb-2 col-5">
                  <label for="email" class="form-label text-secondary">Email :</label>
                  <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your username">
                  <small></small>
                </div>
                <div class="mb-2 col-5"> 
                  <label for="phone" class="form-label text-secondary">Phone :</label>
                  <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter phone">
                  <small></small>
                </div>
                </div>
                <!-- <div class="mb-2"> 
                  <label for="gender" class="form-label text-secondary">Gender :</label>
                  <input type="text" class="form-control" id="gender" name="gender"  placeholder="Enter gender">
                  <small></small>
                </div> -->
               
                <div class="d-flex justify-content-between">
                <div class="mb-2 col-5"> 
                  <label for="age" class="form-label text-secondary">Age </label>
                  <input type="number" class="form-control" id="age" name="age"  placeholder="Enter age">
                  <small></small>
                </div>
                <div class="mb-2 col-12 col-lg-5 "> 
                        <label class="form-label text-secondary">Blood Type </label>             
                        <select  name="bloodType" class="form-select" aria-label="Default select example" required>
                            <!-- <option  value="Autre">Autre</option> -->
                            <option  value="autre">Autre</option>
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
                 <!--  -->
                 <div class="row d-flex justify-content-center my-4">
                     <div class="mb-2 col-12 col-lg-6"> 
                      <label  class="form-label text-secondary d-flex justify-content-around">Gender </label>
                      <div class="d-flex flex-column">
                        <div class="d-flex">
                          <div class="w-50 d-flex justify-content-center">
                              <input type="radio" id="male" name="gender" value="Male" >
                              <label for="male">Male</label><br>
                          </div>    
                          <div class="w-50 d-flex justify-content-center">
                              <input type="radio" id="female" name="gender" value="Female ">
                              <label for="female">Female </label><br>
                          </div>   
                        </div>
                        <small class="text-center" id="RB" style="color:red"></small> 
                      </div>
                     </div>
                    </div>
                <!--  -->
                <!-- <div class="mb-4 mb-sm-2">
                  <label for="bloodType" class="form-label text-secondary">Blood Type :</label>
                  <input type="text" class="form-control" id="bloodType" name="bloodType"  placeholder="Enter blood Type">
                  <small></small>
                </div> -->
                
                <!-- <div class="mb-2"> 
                  <label for="phone" class="form-label text-secondary">Phone :</label>
                  <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter phone">
                  <small></small>
                </div> -->
                <input type="submit" class="btn text-white w-100" name="add" style="background-color: #FF2156"   value="Save"> 
              </form>

              </div>
    <!--  -->

    </div>
  </div>
</main>
<script src="assets/js/validationForm_ADD.js"></script>
</body>
</html> 















<!-- <div class="add h-70 mx-auto p-3 col-11 col-sm-6"  style="display:none;border: 2px solid #12CE81;border-radius: 20px;" id="add">
              <form class="bg-white p-3 " action="" method="POST" >
                <div class="d-flex justify-content-end">
                  <button type="button" class="plus text-danger " onclick="window.location.href='donors'" >X</i></button>
                </div>
                <input type="hidden" name="role" value="donor">
                <div class="d-flex justify-content-between">
                  <div class="mb-2"> 
                    <label for="name" class="form-label text-secondary">Name :</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
                    <small></small>
                  </div>
                  <div class="mb-2">
                    <label for="cin" class="form-label text-secondary">CIN :</label>
                    <input type="text" class="form-control" id="cin" name="cin"  placeholder="Enter your username">
                    <small></small>
                  </div>
                </div>
                <div class="mb-2">
                  <label for="username" class="form-label text-secondary">Email :</label>
                  <input type="text" class="form-control" id="username" name="email"  placeholder="Enter your username">
                  <small></small>
                </div>
                <div class="mb-2"> 
                  <label for="gender" class="form-label text-secondary">Gender :</label>
                  <input type="text" class="form-control" id="gender" name="gender"  placeholder="Enter gender">
                  <small></small>
                </div>
                <div class="mb-2"> 
                  <label for="age" class="form-label text-secondary">Age :</label>
                  <input type="number" class="form-control" id="age" name="age"  placeholder="Enter age">
                  <small></small>
                </div>
                <div class="mb-4 mb-sm-2">
                  <label for="bloodType" class="form-label text-secondary">Blood Type :</label>
                  <input type="text" class="form-control" id="bloodType" name="bloodType"  placeholder="Enter blood Type">
                  <small></small>
                </div>
                <div class="mb-2"> 
                  <label for="phone" class="form-label text-secondary">Phone :</label>
                  <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter phone">
                  <small></small>
                </div>
                <input type="submit" class="btn text-white w-100" name="add" style="background-color: #12CE81"   value="Save"> 
              </form>
            </div> -->