<?php
class donatController{

    public function getAllRequests($id){
        $requests = donat::getAll($id);
        return $requests; 
    }
    public function addReqs($id){
        $data = array(
            'name'      => $_POST['name'],
            'phone'       => $_POST['phone'],
            'city'    => $_POST['city'],
            'groupe' => $_POST['groupe'],
            'id_user' => $id,
        );
        $result = donat::add($data);
        if($result === 'ok'){
            header('location: reqDonor'); 
        }else{
            echo $result;
        }
    }

    // add request : 
    public function add($name,$phone,$groupe,$id){
        $result = donat::add_Req($name,$phone,$groupe,$id);
        if($result === 'ok'){
           // header('location: reqDonor'); 
        }else{
            echo $result;
        }
    }
    // add request : 
    public function getOneReqs(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
        }
        $req = donat::getReqs($data);
        return $req;
    }
    public function updateReqs(){
        if(isset($_POST['update'])){
            $data = array(
                'id'      => $_POST['id'],
                'name'      => $_POST['name'],
                'phone'       => $_POST['phone'],
                'city'    => $_POST['city'],
                'groupe' => $_POST['groupe'],
            );
            $result = donat::update($data);
            if($result === 'ok'){
                // echo 'ok';
                 header('location: reqDonor');
            }else{
                echo $result;
            }
        }
    }
//     public function deleteReqs($id){
//         $data['id'] = $id;
//         $result = donat::delete($data);
//         if($result === 'ok'){
//             echo $id;
//             // header('location: reqDonor');
//         }else{
//             echo $result;
//         }
// }

public function deleteReqs(){
    $data['id'] = $_POST['id'];
    $result = donat::delete($data);
    if($result === 'ok'){
        header('location: reqDonor');
    }else{
        echo $result;
    }
}


    public function getAllWaiting(){
        $requests = donat::getAllWait();
        return $requests; 
    }
    public function updateAcceptStat(){
        if(isset($_POST['Accept'])){
            $data = array(
                'id' => $_POST['Accept'],
            );
            $result = donat::AcceptStat($data);
            if($result === 'ok'){
                // echo 'ok';
                 header('location: adminReq2');
            }else{
                echo $result;
            }
        }
    }
    public function updateRefuseStat(){
        if(isset($_POST['Refuse'])){
            $data = array(
                'id' => $_POST['Refuse'],
            );
            $result = donat::RefuseStat($data);
            if($result === 'ok'){
                // echo 'ok';
                 header('location: adminReq2');
            }else{
                echo $result;
            }
        }
    }
    public function CountAllReqs($id){  
        $req = donat::CountAll($id);
        return $req; 
        }
        public function CountAllRequests(){  
            $req = donat::CountAllRequests();
            return $req; 
          }
}    