<?php

class requestsController{

    public function getAllRequests($id){
        $requests = requests::getAll($id);
        return $requests; 
    }
    public function getAllWaiting(){
        $requests = requests::getAllWait();
        return $requests; 
    }
    public function getAllReqAccepted(){
        $requests = requests::getAllAccepted();
        return $requests; 
    }

    public function addReqs($id){
        $data = array(
            'name'      => $_POST['name'],
            'phone'       => $_POST['phone'],
            'city'    => $_POST['city'],
            'type'     => $_POST['type'],
            'groupe' => $_POST['groupe'],
            'case' => $_POST['case'],
            'date' => $_POST['date'],
            'id_user' => $id,
        );
        $result = requests::add($data);
        if($result === 'ok'){
            header('location: reqForBlood'); 
        }else{
            echo $result;
        }
    }
    public function addReq_Receiver($id){
        $data = array(
            'name'      => $_POST['name'],
            'phone'       => $_POST['phone'],
            'city'    => $_POST['city'],
            'type'     => $_POST['type'],
            'groupe' => $_POST['groupe'],
            'case' => $_POST['case'],
            'date' => $_POST['date'],
            'id_user' => $id,
        );
        $result = requests::add($data);
        if($result === 'ok'){
            header('location: receiver_Requests'); 
        }else{
            echo $result;
        }
    }

    public function getOneReqs(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
        }
        $req = requests::getReqs($data);
        return $req;
    }

    public function getOneReqR(){
        if(isset($_POST['id_Receiver'])){
            $data = array(
                'id' => $_POST['id_Receiver']
            );
        }
        $req = requests::getReqs($data);
        return $req;
    }

    public function updateReqs(){
        if(isset($_POST['update'])){
            $data = array(
                'id'      => $_POST['id'],
                'name'      => $_POST['name'],
                'phone'       => $_POST['phone'],
                'city'    => $_POST['city'],
                'type'     => $_POST['type'],
                'groupe' => $_POST['groupe'],
                'case' => $_POST['case'],
                'date' => $_POST['date'],
            );
            $result = requests::update($data);
            if($result === 'ok'){
                // echo 'ok';
                 header('location: reqForBlood');
            }else{
                echo $result;
            }
        }
    }

    //::::::::::::::::::: Receiver
    public function updateReq(){
        if(isset($_POST['update'])){
            $data = array(
                'id'      => $_POST['id'],
                'name'      => $_POST['name'],
                'phone'       => $_POST['phone'],
                'city'    => $_POST['city'],
                'type'     => $_POST['type'],
                'groupe' => $_POST['groupe'],
                'case' => $_POST['case'],
                'date' => $_POST['date'],
            );
            $result = requests::update($data);
            if($result === 'ok'){
                // echo 'ok';
                 header('location: receiver_Requests');
            }else{
                echo $result;
            }
        }
    }

    public function deleteReqs(){
        $data['id'] = $_POST['id'];
        $result = requests::delete($data);
        if($result === 'ok'){
            header('location: reqForBlood');
        }else{
            echo $result;
        }
}
public function deleteReq(){
    $data['id'] = $_POST['id'];
    $result = requests::delete($data);
    if($result === 'ok'){
        header('location: receiver_Requests');
    }else{
        echo $result;
    }
}
public function CountAllReqs($id){  
$req = requests::CountAll($id);
return $req; 
}

public function updateAcceptStat(){
    if(isset($_POST['idAccept'])){
        $data = array(
            'id'      => $_POST['idAccept'],
        );
        $result = requests::AcceptStat($data);
        if($result === 'ok'){
            // echo 'ok';
             header('location: adminReq1');
        }else{
            echo $result;
        }
    }
}
public function updateRefuseStat(){
    if(isset($_POST['idRefuse'])){
        $data = array(
            'id'      => $_POST['idRefuse'],
        );
        $result = requests::RefuseStat($data);
        if($result === 'ok'){
            // echo 'ok';
             header('location: adminReq1');
        }else{
            echo $result;
        }
    }
}
// Count Accepted Requests : //
public function CountAllRequests(){  
    $req = requests::CountAllRequests();
    return $req; 
  }


  // add request : //
  public function  add($name,$phone,$groupe,$id){
    $req = requests::add($name,$phone,$groupe,$id);
    return $req;
  }
}