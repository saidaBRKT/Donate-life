<?php
$update=null;
if(isset($_GET['edit'])){
    $update = true;
    echo $update;
}

if(isset($_POST['add'])){
    $update = false;
    echo $update;
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
  </head>
<body>
<?php
  require_once "sidebar-donor.php";
?>
<main class="mt-5 pt-5 bg-light h-100 d-flex justify-content-center align-item-center">
  <div class="container mx-5 my-5 ">
    <div>
      <div class="d-flex justify-content-between">
        <div>
        <h1>Requests :</h1>
        </div>
        <div>
        <a href="#" class="d-flex d-md-none btn h-100 " onclick="displayADD()"><i class="bi bi-plus h-100  px-2" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px"></i></a>
        <a href="#" class="btn p-0 h-100 w-100 d-none d-md-flex" onclick="displayADD()"><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px">Add Request</h4></a>
        </div>
      </div>
      <div class="add h-70 mx-auto p-3 col-11 col-sm-6"  style="display:none;border: 2px solid #12CE81;border-radius: 20px;" id="add">
              <form class="bg-white p-3 " action="" method="post" >
                <div class="d-flex justify-content-end">
                  <button type="button" class="plus text-danger " onclick="window.location.href='requests-d'" >X</i></button>
                </div>
                <div class="mb-2 d-none"> 
                  <label for="id" class="form-label text-secondary">id</label>
                  <input type="text" class="form-control" id="id" name="id"  placeholder="Enter name" value="<?= $id_edit ?? '' ?>">
                  <small></small>
                </div>
                <div class="mb-2"> 
                  <label for="name" class="form-label text-secondary">Username</label>
                  <input type="text" class="form-control" id="name" name="name"   value="<?= $name_edit ?? '' ?>" placeholder="Enter name">
                  <small></small>
                </div>
                <div class="mb-2"> 
                  <label for="phone" class="form-label text-secondary">Phone</label>
                  <input type="text" class="form-control" id="phone"name="phone"   value="<?= $phone_edit ?? '' ?>" placeholder="Enter phone">
                  <small></small>
                </div>
                <div class="mb-2"> 
                  <label for="email" class="form-label text-secondary">Email</label>
                  <input type="email" class="form-control" id="email"name="email"   value="<?= $email_edit ?? '' ?>" placeholder="Enter email">
                  <small></small>
                </div>
                <div class="mb-4 mb-sm-2">
                  <label for="addr" class="form-label text-secondary"  >Address</label>
                  <input type="text" class="form-control" id="addr"name="address"   value="<?= $address_edit ?? '' ?>" placeholder="Enter address">
                  <small></small>
                </div>
                  <?php
                    if($update == true):
                  ?>     
                  <input type="submit" class="btn text-white w-100 btn-warning" name="updateData" value="Update">
                  <?php 
                    else:
                  ?>  
                  <input type="submit" class="btn text-white w-100" name="add" style="background-color: #12CE81"   value="Save"> 
                  <?php 
                    endif;
                  ?> 

              </form>
            </div>
      <div class="mt-4">
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#?edit" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px" onclick="displayADD()">Update</a>
                <a href="#?delete" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                <th>Pour :</th>
                <td>saida</td>
                </tr>
                <tr>
                <th>Tél :</th>
                <td>0600000000</td>
                </tr>
                <tr>
                <th>Ville :</th>
                <td>yoyo</td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                  <th>Type :</th>
                  <td>sang</td>
                </tr>
                <tr>
                  <th>Groupe sanguin :</th>
                  <td>O+</td>
                </tr>
                <tr>
                  <th>Date :</th>
                  <td>12/12/2022</td>
                </tr>
              </table>
            </div> 
            <div class="col-12 col-lg-4 my-auto">
              <table>
                <tr>
                <th>Status :</th>
                <td>Accepted</td>
                </tr>
              </table>
            </div> 
          </div>
        </div>
       <!--  -->
       <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Update</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                <th>Pour :</th>
                <td>saida</td>
                </tr>
                <tr>
                <th>Tél :</th>
                <td>0600000000</td>
                </tr>
                <tr>
                <th>Ville :</th>
                <td>yoyo</td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                  <th>Type :</th>
                  <td>sang</td>
                </tr>
                <tr>
                  <th>Groupe sanguin :</th>
                  <td>O+</td>
                </tr>
                <tr>
                  <th>Date :</th>
                  <td>12/12/2022</td>
                </tr>
              </table>
            </div> 
            <div class="col-12 col-lg-4 my-auto">
              <table>
                <tr>
                <th>Status :</th>
                <td>Accepted</td>
                </tr>
              </table>
            </div> 
          </div>
        </div>
        <!--  -->
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Update</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                <th>Pour :</th>
                <td>saida</td>
                </tr>
                <tr>
                <th>Tél :</th>
                <td>0600000000</td>
                </tr>
                <tr>
                <th>Ville :</th>
                <td>yoyo</td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                  <th>Type :</th>
                  <td>sang</td>
                </tr>
                <tr>
                  <th>Groupe sanguin :</th>
                  <td>O+</td>
                </tr>
                <tr>
                  <th>Date :</th>
                  <td>12/12/2022</td>
                </tr>
              </table>
            </div> 
            <div class="col-12 col-lg-4 my-auto">
              <table>
                <tr>
                <th>Status :</th>
                <td>Accepted</td>
                </tr>
              </table>
            </div> 
          </div>
        </div>
        <!--  -->
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Update</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Delete</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                <th>Pour :</th>
                <td>saida</td>
                </tr>
                <tr>
                <th>Tél :</th>
                <td>0600000000</td>
                </tr>
                <tr>
                <th>Ville :</th>
                <td>yoyo</td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-lg-4">
              <table>
                <tr>
                  <th>Type :</th>
                  <td>sang</td>
                </tr>
                <tr>
                  <th>Groupe sanguin :</th>
                  <td>O+</td>
                </tr>
                <tr>
                  <th>Date :</th>
                  <td>12/12/2022</td>
                </tr>
              </table>
            </div> 
            <div class="col-12 col-lg-4 my-auto">
              <table>
                <tr>
                <th>Status :</th>
                <td>Accepted</td>
                </tr>
              </table>
            </div> 
          </div>
        </div>
        <!--  -->
      </div>
    </div>
  </div>
</main>  

<script src="assets/js/my-bootstrap.js"></script>
<script src="./assets/js/formJS.js"></script>
<?php 
          if(isset($_GET['edit'])){?>
          <script>
            document.getElementById("add").style.display="block"
          </script>
      <?php } ?> 
</body>
</html>