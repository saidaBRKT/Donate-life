<?php

class receiver{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `receiver`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `receiver` 
                                        (cin,name,bloodType,phone,address,id_user) 
                                        VALUES (:cin,:name,:bloodType,:phone,:address,:iduser)');
        $stmt->bindParam(':cin',    $data['cin']);
        $stmt->bindParam(':name',   $data['name']);
        $stmt->bindParam(':bloodType',$data['bloodType']);
        $stmt->bindParam(':phone',  $data['phone']);
        $stmt->bindParam(':address',  $data['address']);
        $stmt->bindParam(':iduser',$data['idUser']);
        
        if($stmt->execute()){
            return 'ok';
        }else{
           return 'error';
        }
        $stmt->close();
        $stmt = null;
    } 
    static public function getReceiver($data){
        $cin = $data['cin'];
        try{
            $query = 'SELECT * FROM `receiver` WHERE cin=:cin';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':cin' => $cin));
            $donor = $stmt->fetch(PDO::FETCH_OBJ);
            return $donor;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE `receiver` SET `name`=:name,`bloodType`=:bloodType,`phone`=:phone,`address`=:address WHERE cin= :cin');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':bloodType',$data['bloodType']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':address',$data['address']);
        $stmt->bindParam(':cin',$data['cin']);
            if($stmt->execute()){
                return 'ok';
                // print_r($result);
            die;
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }
    static public function getOneR($data){
        $cin = $data['cin'];
        try{
            $query = 'SELECT  `id_user` FROM `receiver` WHERE cin=:cin';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':cin' => $cin));
            $Receiver = $stmt->fetch(PDO::FETCH_OBJ);
            // var_dump($donor);
            return $Receiver;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function delete($data){
        $cin= $data['cin']; 
        try{
            $query = 'DELETE FROM `receiver` WHERE cin=:cin ';
            // $stmt->bindParam(":iduser",$iduser);
            // $stmt->bindParam(":id",$id);
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM receiver');
        $stmt->execute();
        return $stmt->fetch();
    }
}