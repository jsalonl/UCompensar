<?php

class SuccessMessages{
  // SUCCESS_CONTROLLER_METHOD_ACTION
  const SUCCESS_USER_NEWUSER_EXIST = "s_u_ne_2021_400";
  const SUCCESS_SIGNUP_NEWUSER = "s_s_nu_2021_200";

  private $successList = [];
  public function __construct(){
    $this->successList=[
      SuccessMessages::SUCCESS_USER_NEWUSER_EXIST=>'Usuario creado correctamente',
      SuccessMessages::SUCCESS_SIGNUP_NEWUSER=>'Nuevo usuario creado'
    ];
  }

  public function get($hash){
    return $this->successList[$hash];
  }

  public function existsKey($key){
    if(array_key_exists($key, $this->successList)){
      return true;
    }else{
      return false;
    }
  }
}

?>