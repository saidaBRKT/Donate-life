<?php

class donorsController{

    public function getAllDonors(){
        $donors = donors::getAll();
        return $donors; 
    }
    public function addDonors($idUser){
        $data = array(
            'name'      => $_POST['name'],
            'age'       => $_POST['age'],
            'gender'    => $_POST['gender'],
            'phone'     => $_POST['phone'],
            'bloodType' => $_POST['bloodType'],
            'idUser' => $idUser,
        );
        $result = donors::add($data);
        if($result === 'ok'){
            header('location: donors'); 
        }else{
            echo $result;
        }
    }
    public function getOneDonors(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
        }
        $donor = donors::getDonors($data);
        return $donor;
    }

    public function updateDonors(){
        if(isset($_POST['update'])){
            $data = array(
                'id'      => $_POST['id'],
                'name'    => $_POST['name'],
                'age'   => $_POST['age'],
                'gender'     => $_POST['gender'],
                'phone'   => $_POST['phone'],
                'bloodType' => $_POST['bloodType'],
            );
            $result = donors::update($data);
            if($result === 'ok'){
                // echo 'ok';
                 header('location: donors');
            }else{
                echo $result;
            }
        }
    }
    // 
   

 public function CountAllDonors(){  
    $etd = donors::CountAll();
    return $etd; 
  }

// Add request : //

// Add request : //


// Delete : //
static  public function getOne(){
    $data = array(
        'id' => $_POST['id']
    );
    $donor = donors::getOneD($data);
    return $donor;
}
public function deleteDonors(){
    $data['id'] = $_POST['id'];
    $result = donors::delete($data);
    if($result === 'ok'){
        header('location: donors');
    }else{
        echo $result;
    }   
}

// request donation ://
public function allProfile($idUser){
    $data = array(
        'idUser' => $idUser,
    );
    $result = donors::getProfile($data);
    return $result;
}


public function addUD($idUser){
    $data = array(
        'name'      => $_POST['name'],
        'age'       => $_POST['age'],
        'gender'    => $_POST['gender'],
        'phone'     => $_POST['phone'],
        'bloodType' => $_POST['bloodType'],
        'idUser' => $idUser,
    );
    $result = donors::add($data);
   
    if($result === 'ok'){
        // header('location: reqDonor');
        // var_dump($result); 
    }else{
        echo $result;
    }
}
}