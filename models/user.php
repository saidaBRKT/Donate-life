<?php

class User{
    static public function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO user(email,password,role)VALUES(:email,:password,:role)');
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':role',$data['role']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

    static public function login($data){
        $email = $data['email'];
        try{
            $query = 'SELECT * FROM user WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email" =>$email));
            $Admins = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admins;
        }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
        }
    }

    static public function getUsers($data){
        try{
            $query = 'SELECT * FROM `user` WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':email' => $data['email']));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO user(email,password,role)VALUES(:email,:password,:role)');
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        $stmt->bindParam(':role',$data['role']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }

// Delete : //
static public function delete($id){
  //  $id= $data['id']; 
    try{
        $query = 'DELETE FROM `user` WHERE id=:id ';
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

static public function get($data){
    $options = [
        'cost' => 12
    ];
    $pass = password_hash($data['password'],
    PASSWORD_BCRYPT,$options);
     echo $pass;
    // die;
    try{
        $query = 'SELECT * FROM `user` WHERE email=:email AND password=:pass';
        $stmt = DB::connect()->prepare($query);
        $stmt->execute(array(':email' => $data['email'],
                              ':pass' =>$data['password']));
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        // return $user;
        print_r($user);
        die;

    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}

}