<?php

class UserModel extends Model implements IModel{

  private $id;
  private $vid;
  private $nombre;
  private $correo;
  private $telefono;
  private $password;
  private $personal_key;
  private $creado;
  private $modificado;
  private $carrera_id;
  private $rol;
  private $ciclo_id;

  public function __construct(){
    parent::__construct();
    $this->id=0;
    $this->vid=0;
    $this->nombre='';
    $this->correo='';
    $this->telefono=0;
    $this->password='';
    $this->personal_key='';
    $this->creado='';
    $this->modificado='';
    $this->carrera_id=0;
    $this->rol=0;
    $this->ciclo_id=0;
  }

  public function save(){
    try{
      $query=$this->prepare('INSERT INTO usuario(vid, nombre, correo, telefono, password, personal_key, creado, modificado, carrera_id, rol, ciclo_id) values(:vid, :nombre, :correo, :telefono, :password, :personal_key, :creado, :modificado, :carrera_id, :rol, :ciclo_id)');
      $query->execute([
        'vid'=>$this->vid,
        'nombre'=>$this->nombre,
        'correo'=>$this->correo,
        'telefono'=>$this->telefono,
        'password'=>$this->password,
        'personal_key'=>$this->personal_key,
        'creado'=>$this->creado,
        'modificado'=>$this->modificado,
        'carrera_id'=>$this->carrera_id,
        'rol'=>$this->rol,
        'ciclo_id'=>$this->ciclo_id
      ]);
      return true;
    }catch(PDOException $e){
      error_log('userModel::save->PDOException '.$e);
      return false;
    }
  }

  public function getAll(){
    try{
      $items = [];
      $query=$this->query('SELECT * FROM usuario');
      while($p=$query->fetch(PDO::FETCH_ASSOC)){
        $item = new userModel();
        $item->setVid($p['vid']);
        $item->setNombre($p['nombre']);
        $item->setCorreo($p['correo']);
        $item->setTelefono($p['telefono']);
        $item->setPassword($p['password']);
        $item->setPersonal_key($p['personal_key']);
        $item->setCreado($p['creado']);
        $item->setModificado($p['modificado']);
        $item->setCarrera_id($p['carrera_id']);
        $item->setRol($p['rol']);
        $item->setCiclo_id($p['ciclo_id']);
        array_push($items,$item);
      }
      
      return $items;

    }catch(PDOException $e){
      error_log('userModel::getAll->PDOException '.$e);
      return false;
    }
  }

  public function get($id){
    try{
      $items = [];
      $query=$this->prepare('SELECT * FROM usuario WHERE id=:id');
      $query->execute([
        'id'=>$id
      ]);
      
      $user=$query->fetch(PDO::FETCH_ASSOC);
      $this->setId($user['id']);
      $this->setVid($user['vid']);
      $this->setNombre($user['nombre']);
      $this->setCorreo($user['correo']);
      $this->setTelefono($user['telefono']);
      $this->setPassword($user['password']);
      $this->setPersonal_key($user['personal_key']);
      $this->setCreado($user['creado']);
      $this->setModificado($user['modificado']);
      $this->setCarrera_id($user['carrera_id']);
      $this->setRol($user['rol']);
      $this->setCiclo_id($user['ciclo_id']);  
      
      return $this;

    }catch(PDOException $e){
      error_log('userModel::getId->PDOException '.$e);
      return false;
    }
  }

  public function delete($id){
    try{
      $query=$this->prepare('DELETE FROM usuario WHERE id=:id');
      $query->execute([
        'id'=>$id
      ]);

      return true;
    }catch(PDOException $e){
      error_log('userModel::delete->PDOException '.$e);
      return false;
    }
  }

  public function update(){
    try{
      $query=$this->prepare('UPDATE usuario identificacion=:identificacion, nombre=:nombre, correo=:correo, telefono=:telefono, ubicacion=:ubicacion, foto=:foto, password=:password, recovery_key=:recovery_key, padre_id=:padre_id, role=:role, estado=:estado WHERE id=:id');
      $query->execute([
        'id'=>$this->id,
        'identificacion'=>$this->identificacion,
        'nombre'=>$this->nombre,
        'correo'=>$this->correo,
        'telefono'=>$this->telefono,
        'ubicacion'=>$this->ubicacion,
        'foto'=>$this->foto,
        'password'=>$this->password,
        'recovery_key'=>$this->recovery_key,
        'padre_id'=>$this->padre_id,
        'role'=>$this->role,
        'estado'=>$this->estado
      ]);
      
      return true;

    }catch(PDOException $e){
      error_log('userModel::udpate->PDOException '.$e);
      return false;
    }
  }

  public function from($array){
    $this->id = $array['id'];
    $this->vid = $array['vid'];
    $this->nombre = $array['nombre'];
    $this->correo = $array['correo'];
    $this->telefono = $array['telefono'];
    $this->password = $array['password'];
    $this->personal_key = $array['personal_key'];
    $this->creado = $array['creado'];
    $this->modificado = $array['modificado'];
    $this->carrera_id = $array['carrera_id'];
    $this->rol = $array['rol'];
    $this->ciclo_id = $array['ciclo_id'];
  }

  public function exists($vid){
    try{
      $query=$this->prepare('SELECT vid FROM usuario WHERE vid=:vid');
      $query->execute([
        'vid'=>$vid
      ]);
      if($query->rowCount()>0){
        return true;
      }else{
        return false;
      }
    }catch(PDOException $e){
      error_log('userModel::exists->PDOException '.$e);
      return false;
    }
  }

  public function verifyPassword($password, $id){
    try{

      $user =$this->get($id);
      return password_verify($password, $user->getPassword());

    }catch(PDOException $e){
      error_log('userModel::verifyPassword->PDOException '.$e);
      return false;
    }
  }

  private function getHashPassword($password){
    return password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
  }

  private function getUpperCase($string){
    return strtoupper($string);
  }

  private function getLowerCase($string){
    return strtolower($string);
  }

  public function setId($id){
    $this->id=$id;
  }

  public function setVid($vid){
    $this->vid=$vid;
  }

  public function setNombre($nombre){
    $this->nombre=$nombre;
  }

  public function setCorreo($correo){
    $this->correo=$correo;
  }

  public function setTelefono($telefono){
    $this->telefono=$telefono;
  }

  public function setPassword($password){
    $this->password=$this->getHashPassword($password);
  }

  public function setPersonal_key($personal_key){
    $this->personal_key=$personal_key;
  }

  public function setCreado($creado){
    $this->creado=$creado;
  }

  public function setModificado($modificado){
    $this->modificado=$modificado;
  }

  public function setCarrera_id($carrera_id){
    $this->carrera_id=$carrera_id;
  }

  public function setRol($rol){
    $this->rol=$rol;
  }

  public function setCiclo_id($ciclo_id){
    $this->ciclo_id=$ciclo_id;
  }

  public function getId(){
    return $this->id;
  }
  
  public function getVid(){
    return $this->vid;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function getCorreo(){
    return $this->correo;
  }

  public function getTelefono(){
    return $this->telefono;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getPersonal_key(){
    return $this->personal_key;
  }

  public function getCreado(){
    return $this->creado;
  }

  public function getModificado(){
    return $this->modificado;
  }

  public function getCarrera_id(){
    return $this->carrera_id;
  }

  public function getRol(){
    return $this->rol;
  }

  public function getCiclo_id(){
    return $this->ciclo_id;
  }
  
}

?>