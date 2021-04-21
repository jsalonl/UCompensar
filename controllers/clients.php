<?php

class Clients extends SessionController{

  private $user;

  function __construct(){
    parent::__construct();

    $this->user = $this->getUserSessionData();
  }

  function render(){
    $this->view->render('clients/index',[
      'user'=>$this->user
    ]);
  }

}

?>