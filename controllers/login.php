<?php
class Login extends SessionController{

  function __construct(){
    parent::__construct();
    error_log('Login::construct-> Inicio de Login');   
  }

  function render(){
    $this->view->render('login/index');
  }

  function authenticate(){
    if($this->existPOST(['correo','password'])){
      $correo = $this->getPost('correo');
      $password = $this->getPost('password');

      if($correo == '' || empty($correo) || $password == '' || empty($password)){
        $this->redirect('', ['error' => ErrorMessages::ERROR_LOGIN_AUTHENTICATE_EMPTY]);     
      }else{
        $user = $this->model->login($correo, $password);

        if($user!=NULL){
          $this->initialize($user);
          /*
          if($user->getEstado()==1){
            $this->initialize($user); 
          }else{
            $this->redirect('', ['error'=>ErrorMessages::ERROR_LOGIN_AUTHENTICATE_STATUS]);
          }
          */
        }else{
          $this->redirect('', ['error'=>ErrorMessages::ERROR_LOGIN_AUTHENTICATE_DATA]);
        }
          
      }
    }else{
      $this->redirect('', ['error'=>ErrorMessages::ERROR_LOGIN_AUTHENTICATE_POST]);
    }
  }
}
?>