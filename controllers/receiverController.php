<?php

class receiverController{

    public function getAllReceiver(){
        $donors = receiver::getAll();
        return $donors; 
    }
    public function addReceiver($idUser){
        $data = array(
            'cin'      =>$_POST['cin'],
            'name'      => $_POST['name'],
            'bloodType' => $_POST['bloodType'],
            'phone'     => $_POST['phone'],
            'address'       => $_POST['address'],
            'idUser' => $idUser,
        );
        $result = receiver::add($data);
        if($result === 'ok'){
            header('location: receiver'); 
        }else{
            echo $result;
        }
    }
    public function getOneReceiver(){
            $data = array(
                'cin' => $_POST['cin']
            );
        
        $donor = receiver::getReceiver($data);
        return $donor;
    }
    public function updateReceiver(){
        if(isset($_POST['update'])){
            $data = array(
                'cin'      => $_POST['cin'],
                'name'    => $_POST['name'],
                'bloodType' => $_POST['bloodType'],
                'phone'   => $_POST['phone'],
                'address'   => $_POST['address'],
            );
            $result = receiver::update($data);
            
            if($result === 'ok'){
                // echo 'ok';
                 header('location: receiver');
            }else{
                echo $result;
            }
        }
    }
    static  public function getOne(){
        $data = array(
            'cin' => $_POST['cin']
        );
        $donor = receiver::getOneR($data);
        return $donor;
    }
    public function deleteReceiver(){
        $data['cin'] = $_POST['cin'];
        $result = receiver::delete($data);
        if($result === 'ok'){
            header('location: receiver');
        }else{
            echo $result;
        }   
    }
    public function CountAllReceivers(){  
        $rec = receiver::CountAll();
        return $rec; 
      }

}    