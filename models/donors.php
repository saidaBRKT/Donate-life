<?php
// if(isset($_POST['id'])){
//   $exitDonors = new donorsController();
//   $donor = $exitDonors->getOneDonors();
// }

// if(isset($_POST['update'])){
//  $exitDonors = new donorsController();
//  $exitdonors->updateDonors();
// }
class donors{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `donors`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `donors` 
                                        (name,age,gender,phone,bloodType,id_user) 
                                        VALUES (:name,:age,:gender,:phone,:bloodType,:iduser)');
        $stmt->bindParam(':name',   $data['name']);
        $stmt->bindParam(':age',    $data['age']);
        $stmt->bindParam(':gender',  $data['gender']);
        $stmt->bindParam(':phone',  $data['phone']);
        $stmt->bindParam(':bloodType',$data['bloodType']);
        $stmt->bindParam(':iduser',$data['idUser']);
        
        if($stmt->execute()){
            return 'ok';
        }else{
           return 'error';
        }
        $stmt->close();
        $stmt = null;
    } 
    static public function getDonors($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM `donors` WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $donor = $stmt->fetch(PDO::FETCH_OBJ);
            return $donor;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE`donors` SET `name`=:name,`age`=:age,`gender`=:gender,`phone`=:phone,`bloodType`=:bloodType WHERE id= :id');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':age',$data['age']);
        $stmt->bindParam(':gender',$data['gender']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':bloodType',$data['bloodType']);
        $stmt->bindParam(':id',$data['id']);
            if($stmt->execute()){
                return 'ok';
                
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }
    static public function getInfoDonor($idUser){
        try{
            $query = 'SELECT * FROM `donors` WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $idUser));
            $donor = $stmt->fetch(PDO::FETCH_OBJ);
            return $donor;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }

    // Add request : //
   
    
    // Add request : //

    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM donors');
        $stmt->execute();
        return $stmt->fetch();
    }


    // Delete : //
    static public function getOneD($data){
        $id = $data['id'];
        try{
            $query = 'SELECT  `id_user` FROM `donors` WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $donor = $stmt->fetch(PDO::FETCH_OBJ);
            // var_dump($donor);
            return $donor;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function delete($data){
        $id= $data['id']; 
        try{
            $query = 'DELETE FROM `donors` WHERE id=:id ';
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

    // donation

    static public function getProfile($data){
        $id = $data['idUser'];
        try{
            $query = 'SELECT * FROM `donors` WHERE id_user=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $donor = $stmt->fetch(PDO::FETCH_OBJ);
            // var_dump($donor);
            // die();
            return $donor;
        }
        catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
}

