<?php
     if(isset($_POST['cin'])){
        $exit = new receiverController();
        $receiver = $exit->getOneReceiver();
    }
    else{
       Redirect::to('receiver');
    }
    if(isset($_POST['update'])){
       $exit = new receiverController();
       $exit->updateReceiver();
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
<main class="h-100 mt-5 pt-5 bg-light d-flex justify-content-center align-item-center">
  <div class="container mx-5 my-5 ">
    <div>
      <div class="w-100 text-center">
        <h4 class="fw-bold">Update Receiver :</h4>
      </div>
      <!--  -->

      <!--  -->
      <div class="w-75 mt-5 add h-70 mx-auto p-3 col-11 col-sm-6"  style="border: 2px solid #FF2156;border-radius: 20px;" id="UP">
              <form class="bg-light p-3 " action="UP_receiver" method="POST" id="myF">
                <div class="d-flex justify-content-end">
                  <button type="button" class="plus text-danger " onclick="window.location.href='Receiver'" >X</i></button>
                </div>
                <div class="d-flex justify-content-between">
                <div class="mb-2 col-5"> 
                  <label for="name" class="form-label text-secondary">Name</label>
                  <input type="text" class="form-control" id="name" name="name"   value="<?php echo $receiver->name; ?>" >
                  <small></small>
                </div>     
                <div class="mb-2 col-5"> 
                  <label for="address" class="form-label text-secondary">Age</label>
                  <input type="text" class="form-control" id="address" name="address"   value="<?php echo $receiver->address; ?>">
                  <small></small>
                </div>
                </div>
                <div class="d-flex justify-content-between">
                <div class="mb-2 col-5"> 
                  <label for="phone" class="form-label text-secondary">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone"   value="<?php echo $receiver->phone; ?>">
                  <small></small>
                </div>
                <div class="mb-2 col-12 col-lg-5 "> 
                        <label class="form-label text-secondary">Blood Type</label>             
                        <select  name="bloodType" class="form-select" aria-label="Default select example">
                            <option  value="A+" <?php echo ($receiver->bloodType === 'A+') ? 'selected': '';?> >A+</option>
                            <option  value="A-" <?php echo ($receiver->bloodType === 'A-') ? 'selected': '';?> >A-</option>
                            <option  value="B+" <?php echo ($receiver->bloodType === 'B+') ? 'selected': '';?> >B+</option>
                            <option  value="B-" <?php echo ($receiver->bloodType === 'B-') ? 'selected': '';?> >B-</option>
                            <option  value="AB+" <?php echo ($receiver->bloodType === 'AB+') ? 'selected': '';?> >AB+</option>
                            <option  value="AB-" <?php echo ($receiver->bloodType === 'AB-') ? 'selected': '';?> >AB-</option>
                            <option  value="O+" <?php echo ($receiver->bloodType === 'O+') ? 'selected': '';?> >O+</option>
                            <option  value="O-" <?php echo ($receiver->bloodType === 'O-') ? 'selected': '';?> >O-</option>
                        </select>                       
                        <small></small>
                    </div>
                <!--  -->
                </div>


              
                
                <!--  -->
                <form method="POST">
                  <input type="hidden" name="cin" value="<?php echo  $receiver->cin;?>">
                  <input type="submit" class="btn text-white w-100" name="update" style="background-color: #FF2156"   value="Update"> 
                </form>
                <!-- <button type="submit" name="update" class="btn btn-dark">Edite</button>  -->
            </form>
            </div>
    <!--  -->

    </div>
  </div>
</main> 
<script src="assets/js/Validat_FormUpdate.js"></script>
</body>
</html>