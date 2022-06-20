<?php
class donat{

    static public function getAll($id){
        $stmt = DB::connect()->prepare('SELECT * FROM `requesttodonat` where id_user=:id');
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `requesttodonat` 
                                        (`name`,`phone`,`city`,`groupe`,`id_user`)
                                        VALUES (:name,:phone,:city,:groupe,:id_user)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':city', $data['city']);
        $stmt->bindParam(':groupe',$data['groupe']);
        $stmt->bindParam(':id_user',$data['id_user']);

        // $stmt = null;
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    } 
    // add request : //
    static public function add_Req($name,$phone,$groupe,$id){
        $stmt = DB::connect()->prepare('INSERT INTO `requesttodonat` 
                                        (`name`,`phone`,`groupe`,`id_user`)
                                        VALUES (:name,:phone,:groupe,:id_user)');
        $stmt->bindParam(':name',$name);
        $stmt->bindParam(':phone',$phone);
        $stmt->bindParam(':groupe',$groupe);
        $stmt->bindParam(':id_user',$id);

        // $stmt = null;
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    } 
    // add request ://

    static public function getReqs($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM `requesttodonat` WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $req = $stmt->fetch(PDO::FETCH_OBJ);
            return $req;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE `requesttodonat` SET `name`=:name,`phone`=:phone,`city`=:city,`groupe`=:groupe WHERE id=:id');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':city',$data['city']);
        $stmt->bindParam(':groupe',$data['groupe']);
        $stmt->bindParam(':id',$data['id']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }
    // static public function delete($data){
    //     $id= $data['id']; 
    //     try{
    //         $query = 'DELETE FROM `requesttodonat` WHERE id= :id';
    //         $stmt = DB::connect()->prepare($query);
    //         $stmt->execute(array(':id' => $id));
    //         if($stmt->execute()){
    //             return 'ok';
    //         }
    //     }catch(PDOException $ex){
    //         echo 'erreur' . $ex->getMessage();
    //     }
    // }
    static public function delete($data){
        $id= $data['id']; 
        try{
            $query = 'DELETE FROM `requesttodonat` WHERE id= :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function CountAll($idUser){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM requesttodonat WHERE id_user=:idUser');
        $stmt->execute(array(':idUser' => $idUser));
        return $stmt->fetch();
    }
    
    static public function getAllWait(){
        $stmt = DB::connect()->prepare('SELECT * FROM `requesttodonat` where status="waiting"');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function AcceptStat($data){
        $status='Accepted';
        $stmt = DB::connect()->prepare('UPDATE `requesttodonat` SET `status`=:status WHERE id=:id');
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(':id',$data['id']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }
    static public function RefuseStat($data){
        $status='Refused';
        $stmt = DB::connect()->prepare('UPDATE `requesttodonat` SET `status`=:status WHERE id=:id');
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(':id',$data['id']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }
    static public function CountAllRequests(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM requesttodonat');
        $stmt->execute();
        return $stmt->fetch();
    }
}    