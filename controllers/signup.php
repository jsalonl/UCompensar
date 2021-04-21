<?php

require_once 'models/usermodel.php';

class SignUp extends SessionController{
  
  function __construct(){
    parent::__construct();
  }

  function render(){
    $this->view->render('login/signup', []);

  }

  function newUser(){
    if($this->existPOST(['identificacion', 'nombre', 'correo', 'telefono', 'password'])){
        
        $identificacion = $this->getPost('identificacion');
        $nombre = $this->getPost('nombre');
        $correo = $this->getPost('correo');
        $telefono = $this->getPost('telefono');
        $password = $this->getPost('password');
        
        //validate data
        if($identificacion == '' || empty($identificacion) || $nombre == '' || empty($nombre) || $correo == '' || empty($correo)  || $telefono == '' || empty($telefono) || $password == '' || empty($password)){
            $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER_EMPTY]);
        }else{
          $user = new UserModel();
          $user->setVid($identificacion);
          $user->setNombre($nombre);
          $user->setCorreo($correo);
          $user->setTelefono($telefono);
          $user->setPassword($password);
          $user->setPersonal_key(null);
          $user->setCreado(date('Y-m-d H:i:s'));
          $user->setModificado(date('Y-m-d H:i:s'));
          $user->setCarrera_id(1);
          $user->setRol('Estudiante');
          $user->setCiclo_id(1);
          
          
          if($user->exists($identificacion)){
            $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER_EXISTS]);
          }else if($user->save()){
            $this->redirect('', ['success' => SuccessMessages::SUCCESS_SIGNUP_NEWUSER]);
          }else{
            $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_NEWUSER]);
          }
        }
    }else{
        $this->redirect('signup', ['error' => ErrorMessages::ERROR_SIGNUP_POST]);
    }
  }

}

?>