<?php
class requests{

    static public function getAll($id){
        $stmt = DB::connect()->prepare('SELECT * FROM `requestforblood` where id_user=:id');
        $stmt->execute(array(':id' => $id));
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function getAllWait(){
        $stmt = DB::connect()->prepare('SELECT * FROM `requestforblood` where status="waiting"');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function getAllAccepted(){
        $stmt = DB::connect()->prepare('SELECT * FROM `requestforblood` where status="accepted"');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }


    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `requestforblood` 
                                        (`name`,`phone`,`city`,`type`,`groupe`,`case`,`date`,`id_user`)
                                        VALUES (:name,:phone,:city,:type,:groupe,:case,:date,:id_user)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':city', $data['city']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':groupe',$data['groupe']);
        $stmt->bindParam(':case',$data['case']);
        $stmt->bindParam(':date',$data['date']);
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

    static public function getReqs($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM `requestforblood` WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $req = $stmt->fetch(PDO::FETCH_OBJ);
            return $req;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }


    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE `requestforblood` SET `name`=:name,`phone`=:phone,`city`=:city,`type`=:type,`groupe`=:groupe,`case`=:case,`date`=:date WHERE id=:id');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':city',$data['city']);
        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':groupe',$data['groupe']);
        $stmt->bindParam(':case',$data['case']);
        $stmt->bindParam(':date',$data['date']);
        $stmt->bindParam(':id',$data['id']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }

    static public function delete($data){
        $id= $data['id']; 
        try{
            $query = 'DELETE FROM `requestforblood` WHERE id= :id';
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
        $stmt = DB::connect()->prepare('SELECT count(*) FROM requestforblood WHERE id_user=:idUser');
        $stmt->execute(array(':idUser' => $idUser));
        return $stmt->fetch();
    }

    static public function AcceptStat($data){
        $status='Accepted';
        $stmt = DB::connect()->prepare('UPDATE `requestforblood` SET `status`=:status WHERE id=:id');
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
        $stmt = DB::connect()->prepare('UPDATE `requestforblood` SET `status`=:status WHERE id=:id');
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
    public function countGroupe($grp){
        $stmt = DB::connect()->prepare("SELECT count(*) as `nbrgroupBMoins` FROM `requestforblood` where groupe= :grp AND status ='accepted'");
        $stmt->execute(array(':grp' => $grp));
        return $stmt->fetch()['nbrgroupBMoins'];
        $stmt->close();
        $stmt = null;
    }


    // Count All Accepted Request : //
    static public function CountAllRequests(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM requestforblood');
        $stmt->execute();
        return $stmt->fetch();
    }
    //////////////////
    static public function addreq($name,$phone,$groupe,$id){
        $stmt = DB::connect()->prepare('INSERT INTO `requestforblood` 
                                        (`name`,`phone`,`city`,`type`,`groupe`,`case`,`date`,`id_user`)
                                        VALUES (:name,:phone,:city,:type,:groupe,:case,:date,:id_user)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':phone',$data['phone']);
        $stmt->bindParam(':city', $data['city']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':groupe',$data['groupe']);
        $stmt->bindParam(':case',$data['case']);
        $stmt->bindParam(':date',$data['date']);
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
}