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
  <div class="container mx-5 my-5 ">
    <div>
    <div class="d-flex justify-content-between">
      <div>
       <h1>Patients List :</h1>
      </div>
      <div>
       <a href="#" class="d-flex d-md-none btn h-100 "><i class="bi bi-plus h-100  px-2" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px"></i></a>
       <a href="#" class="btn p-0 h-100 w-100 d-none d-md-flex"><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px">Add Patient</h4></a>
      </div>
    </div>
    <div class=" mt-4">
      <div class="table-responsive">
        <table class="table"  style="min-width:600px">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Name</th>
              <th scope="col">Blood type</th>
              <th scope="col">City</th>
              <th scope="col">Tél</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Mark</td>
              <td class="w-25">
                
              <div class="d-flex w-100">
                    <a href="accueil.php?edit=<?=$val['id']?>" class="d-flex d-lg-none text-decoration-none me-2"><i class="fal fa-pen text-warning"></i></a>
                    <a href="accueil.php?id=<?=$val['id']?>&req=delete" class="d-flex d-lg-none text-decoration-none"><i class="fal fa-trash text-danger mx-1"></i></a>
                    <a class="btn btn-warning d-none d-lg-flex me-2 w-50" href="accueil.php?edit=<?=$val['id']?>" >Update</a>
                    <a class="btn btn-danger d-none d-lg-flex w-50" href="accueil.php?id=<?=$val['id']?>&req=delete" >Delete</a>
              </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Mark</td>
              <td>
              <div class="d-flex w-100">
                    <a href="accueil.php?edit=<?=$val['id']?>" class="d-flex d-lg-none text-decoration-none me-2"><i class="fal fa-pen text-warning"></i></a>
                    <a href="accueil.php?id=<?=$val['id']?>&req=delete" class="d-flex d-lg-none text-decoration-none"><i class="fal fa-trash text-danger mx-1"></i></a>
                    <a class="btn btn-warning d-none d-lg-flex me-2 w-50" href="accueil.php?edit=<?=$val['id']?>" >Update</a>
                    <a class="btn btn-danger d-none d-lg-flex w-50" href="accueil.php?id=<?=$val['id']?>&req=delete" >Delete</a>
                    </div>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry the Bird</td>
              <td>@twitter</td>
              <td>Mark</td>
              <td>Mark</td>
              <td>
              <div class="d-flex w-100">
                    <a href="accueil.php?edit=<?=$val['id']?>" class="d-flex d-lg-none text-decoration-none me-2"><i class="fal fa-pen text-warning"></i></a>
                    <a href="accueil.php?id=<?=$val['id']?>&req=delete" class="d-flex d-lg-none text-decoration-none"><i class="fal fa-trash text-danger mx-1"></i></a>
                    <a class="btn btn-warning d-none d-lg-flex me-2 w-50" href="accueil.php?edit=<?=$val['id']?>" >Update</a>
                    <a class="btn btn-danger d-none d-lg-flex w-50" href="accueil.php?id=<?=$val['id']?>&req=delete" >Delete</a>
                    </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
</main>  

<script src="assets/js/my-bootstrap.js"></script>
</body>
</html>