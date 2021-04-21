<?php
class Dashboard extends SessionController{

  private $user; 
  
  function __construct(){
    parent::__construct();
    $this->user = $this->getUserSessionData();
    error_log('Dashboard::construct-> Inicio de Dashboard');   
  }

  function render(){
    error_log('Dashboard::render-> Carga dashboard');   
    $this->view->render('dashboard/index',[
      'user'=>$this->user
    ]);
  }
 
  public function getClients(){

  }

  public function getPines(){

  }

}
?>