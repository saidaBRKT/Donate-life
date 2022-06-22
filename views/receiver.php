<?php
if(!isset($_SESSION["logged"])){
  header('location: signIn');
 die();
}
$data = new receiverController();
$receivers = $data->getAllReceiver();

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
require_once "views/includes/sidebar.php";
?>
<main class="h-100 mt-5 pt-5 d-flex justify-content-center align-item-center">
  <div class="container mx-5 my-5 ">
    <div>
    <div class="d-flex justify-content-between">
      <div>
       <h1>Receivers List :</h1>
      </div>
      <div>
       <a href="ADD_receiver" class="d-flex d-md-none btn h-100 "><i class="bi bi-plus h-100  px-2" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px" onclick="displayADD()"></i></a>
       <a href="ADD_receiver" class="btn p-0 h-100 w-100 d-none d-md-flex"><h4 class="h-100 pt-2 px-3" style="color:#FF2156;border:1px solid #FF2156;border-radius:5px" onclick="displayADD()">Add Receiver</h4></a>
      </div>
    </div>
    <?php
    ?>
    <div class=" mt-4">
      <div class="table-responsive">
        <table class="table" style="min-width:600px">
          <thead>
            <tr>
              <th scope="col">CIN</th>
              <th scope="col">Name</th>
              <th scope="col">Blood type</th>
              <th scope="col">Phone</th>
              <th scope="col">Adress</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($receivers as $receiver): ?>
            <tr>
              <th scope="row"><?php echo $receiver['cin'] ?></th>
              <td class="d-name"><?php echo $receiver['name'] ?></td>
              <td><?php echo $receiver['bloodType'] ?></td>
              <td><?php echo $receiver['phone'] ?></td> 
              <td><?php echo $receiver['address'] ?></td>
              
              <td class="d-flex justify-content-start fs-4 text-dark border-0">
              <form method="POST" action="UP_receiver">
                <input type="hidden" name="cin" value="<?php echo  $receiver['cin'];?>">
                <button class="border-0 bg-white p-0"><i class="bi bi-pencil-square"></i></button>            
              </form>
              <form method="POST" action="deleteReceiver">
              <input type="hidden" name="cin" value="<?php echo $receiver['cin'];?>">
              <button type="submit" class="border-0 bg-white p-0"><i class="bi bi-trash-fill ms-3"></i></button>
              </form>
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