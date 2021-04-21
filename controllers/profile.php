<?php

require_once 'models/usermodel.php';

class Profile extends SessionController{
  
  private $user;

  function __construct(){
    parent::__construct();
    $this->user = $this->getUserSessionData();
  }

  function render(){
    $this->view->render('profile/index',[
      'user'=>$this->user
    ]);
  }

  function updateName(){
    if(!$this->existPOST('nombre')){
      $this->redirect('profile', []); //TODO:
      return;
    }

    $name=$this->getPost('name');

    if($name=='' || empty($name)){
      $this->redirect('profile', []); //TODO:
      return;
    }

    $this->user->setNombre($name);
    if($this->user->update()){
      $this->redirect('user',[]); //TODO:
    }
  }

  function updatePassword(){

  }

  function updatePhoto(){

  }

}

?>