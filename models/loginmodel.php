<?php

require_once 'models/usermodel.php';

class LoginModel extends Model{

  function __construct(){
    parent::__construct();
  }

  function login($correo, $password){
    try{
      $query = $this->prepare('SELECT * FROM usuario WHERE correo=:correo');
      $query->execute(['correo'=>$correo]);

      if($query->rowCount() == 1){
        $item =  $query->fetch(PDO::FETCH_ASSOC);
        $user = new UserModel();
        $user->from($item);

        if(password_verify($password, $user->getPassword())){
          error_log('LoginModel::login->success'); // TODO:
          return $user;
        }else{
          error_log('LoginModel::login->Password no es igual');// TODO:
          return NULL;
        }
      }

    }catch (PDOException $e){
      error_log('LoginModel::login->exception: ' . $e);// TODO:
      return NULL;
    }
  }
}

?>