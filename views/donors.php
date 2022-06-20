<?php

$data = new donorsController();
$donors = $data->getAllDonors();

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
<main class="h-100 mt-5 pt-5 d-flex justify-content-center align-item-center">
  <div class="container mx-5 my-5 ">
    <div>
    <div class="d-flex justify-content-between">
      <div>
       <h1>Donors List :</h1>
      </div>
      <div>
       <a href="form-ADD" class="d-flex d-md-none btn h-100 "><i class="bi bi-plus h-100  px-2" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px" onclick="displayADD()"></i></a>
       <a href="form-ADD" class="btn p-0 h-100 w-100 d-none d-md-flex"><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px" onclick="displayADD()">Add Donor</h4></a>
      </div>
    </div>
    <!--  -->
    <?php
  // require_once "form-ADD.php";
    ?>
    <!--  -->

    <!--  -->
    <div class=" mt-4">
      <div class="table-responsive">
        <table class="table" style="min-width:600px">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Age</th>
              <th scope="col">Blood type</th>
              <th scope="col">Phone</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($donors as $donor): ?>
            <tr>
              <th scope="row"><?php echo $donor['id'] ?></th>
              <td class="d-name"><?php echo $donor['name'] ?></td>
              <td><?php echo $donor['gender'] ?></td>
              <td><?php echo $donor['age'] ?></td>
              <td><?php echo $donor['bloodType'] ?></td>
              <td><?php echo $donor['phone'] ?></td> 
              
              <td class="d-flex justify-content-start fs-4 text-dark border-0">
              <form method="POST" action="form-up">
                <input type="hidden" name="id" value="<?php echo  $donor['id'];?>">
                <button class="border-0 bg-white p-0"><i class="bi bi-pencil-square"></i></button>            
              </form>
              <!-- <form method="POST" action="donors"> -->
              <form method="POST" action="deleteDonor">
              <input type="hidden" name="id" value="<?php echo $donor['id'];?>">
              <button type="submit" class="border-0 bg-white p-0"><i class="bi bi-trash-fill ms-3"></i></button>
              </form> 
              <!-- </form> -->
                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Donors</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
            
                      <div class="modal-body">
                              You Are Sure To Delete
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <form method="POST" action="deleteDonor">
                                <input type="text" name="id" value="
                                
                                ">
                                <button type="submit" class="border-0 btn btn-dark">
                                  Delete
                        </button>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->
            <!--  -->
               </td>
 
            </tr>
        
          <?php endforeach; ?> 
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
</main>  
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Donors</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You Are Sure To Delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="deleteDonor" method="POST">
          //
          <input type="hidden" name="id" value="
         
          <button class="border-0 btn btn-dark">
            Yes
          </button>
        </form>
      </div>
    </div>
  </div>
</div> -->
<!--  -->
<script src="assets/js/my-bootstrap.js"></script>
<script src="./assets/js/formJS.js"></script>
<script>
  let search = document.getElementById("search")
  let dnames = [...document.querySelectorAll(".d-name")]

  search.addEventListener("input", () => {
    let searchVal = search.value.toLowerCase()
    dnames.forEach(name => {
      let t = name.textContent.trim().toLowerCase()
      if(t.startsWith(searchVal)) {
        name.parentElement.style.display = "table-row"
      } else {
        name.parentElement.style.display = "none"
      }
    })

  })
</script>
</body>
</html>