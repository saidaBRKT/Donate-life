<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
$data = new requestsController();
$reqs = $data->getAllRequests();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests</title>
    <link rel="stylesheet" href="assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/formStyle.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>
<body>
<?php
  require_once "sidebar.php";
?>
<main class="mt-5 pt-5 bg-light h-100 d-flex justify-content-center align-item-center">
  <div class="container mx-5 my-5 ">
    <div>
      <div class="d-flex justify-content-between">
        <div>
        <h1>Requests :</h1>
        </div>
        <div>
        <a href="#" class="d-flex d-md-none btn h-100 "><i class="bi bi-plus h-100  px-2" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px"></i></a>
        <a href="#" class="btn p-0 h-100 w-100 d-none d-md-flex"><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px">Add Request</h4></a>
        </div>
      </div>
      <div class="mt-4">
      <?php foreach($reqs as $req): ?>
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : <?php echo $req['id'] ?>
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Accepter</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Refuser</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-6">
              <table>
                <tr>
                <th>Pour :</th>
                <td><?php echo $req['name'] ?></td>
                </tr>
                <tr>
                <th>Tél :</th>
                <td><?php echo $req['phone'] ?></td>
                </tr>
                <tr>
                <th>Ville :</th>
                <td><?php echo $req['city'] ?></td>
                </tr>
              </table>
            </div>
            <div class="col-12 col-lg-6">
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
          </div>
        </div>
        <?php endforeach; ?>
        <!--  -->
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Accepter</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Refuser</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-6">
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
            <div class="col-12 col-lg-6">
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
          </div>
        </div>
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Accepter</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Refuser</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-6">
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
            <div class="col-12 col-lg-6">
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
          </div>
        </div>
        <div class="container bg-white mb-3" style="border-radius:7px">
          <div class="row" style="border-bottom:1px solid gray">
            <div class="col-6 fw-bold my-3 py-2"> 
              N° : 10
            </div>
            <div class="col-6 d-flex justify-content-center align-item-center px-0 my-3">
              <div class="text-center w-100 d-flex justify-content-end me-2">
                <a href="#" class=" py-2 me-1 text-white text-decoration-none w-25 h-100 my-auto bg-success" style="border:1px solid rgba(220, 233, 233, 1);border-radius:5px">Accepter</a>
                <a href="#" class=" py-2 text-white text-decoration-none w-25 h-100 my-auto" style="background-color:rgba(255, 33, 86,1);border-radius:5px">Refuser</a>
              </div>
            </div>
          </div> 
          <div class="row d-flex ms-0 px-0">
            <div class="col-12 col-lg-6">
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
            <div class="col-12 col-lg-6">
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
          </div>
        </div>
      </div>
    </div>
  </div>
</main>  

<script src="assets/js/my-bootstrap.js"></script>
</body>
</html>