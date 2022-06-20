<?php

     class userController{

     

         public function register(){
             if(isset($_POST['save'])){
                //  $options = [
                //      'cost' => 12
                //  ];
                //  $password = password_hash($_POST['password'],
                //  PASSWORD_BCRYPT,$options);
                 $data = array(
                     'email' => $_POST['email'],
                     'password' => $_POST['password'],
                     'role' => $_POST['role'],
                 );
                 $result = USER::createUser($data);
                 if($result === 'ok'){
                     header('location: signIn'); 
                 }else{
                     echo $result;
                 }
             }
         }

         static public function auth(){
            if(isset($_POST['login'])){
                $data['email'] = $_POST['email'];
                $result = user::login($data);
                $options = [
                    'cost' => 12
                ];
                $password = password_hash($_POST['password'],
                PASSWORD_BCRYPT,$options);
               
                if($result->email === $_POST['email'] && password_verify($_POST['password'],$password)){
                //     $check = $_POST['check'] ?? ''; 
                //     if($check === "on"){
                //         setcookie('email', $_POST["email"], time() + 3600 * 24);
                //         setcookie('password', $_POST["password"], time() + 3600 * 24);
                // }else{
                //         setcookie('email');
                //         setcookie('password');
                // }
                    if( $result->role == 'admin'){
                        $_SESSION['logged'] = true;
                        $_SESSION['email']  = $result->email;
                        $_SESSION['role']  = $result->role;
                        $_SESSION['id']  = $result->id;
                        header('location:  dashboard');
                    }else if($result->role == 'donor'){
                        $_SESSION['logged'] = true;
                        $_SESSION['email']  = $result->email;
                        $_SESSION['role']  = $result->role;
                        $_SESSION['id']  = $result->id;
                        header('location: pageDonor');
                    }
                

                }else{
                    header('location: signIn');
                }
            }
        }


            static  public function getSignIn($email,$pass){
                $donor = user::get(['email'=> $email,'password'=>$pass]);
                return $donor;
            }






   










           static public function addUsers($role){
                    $options = [
                        'cost' => 12
                    ];
                    $password = password_hash($_POST['cin'],
                    PASSWORD_BCRYPT,$options);
                    $data = array(
                        'email'      => $_POST['email'],
                        'password'       => $password,
                        'role'    => $role,
                    );
                    $result = user::add($data);
                    // if($result === 'ok'){
                    //     header('location: donors'); 
                    // }else{
                    //     echo $result;
                    // }
            }
         static  public function getOneUser($email){
                $donor = user::getUsers(['email'=> $email]);
                return $donor;
            }

          // Delete : //
          public function deleteUser($id){
            $result = user::delete($id);
            if($result === 'ok'){
                // echo 'ok';
                header('location: donors');
            }else{
                echo $result;
            }   
        }  

        


}

