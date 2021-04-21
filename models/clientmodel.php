<?php

class ClienteModel extends Model implements IModel{
  private $id;
  private $identificacion;
  private $nombre;
  private $correo;
  private $telefono;
  private $ubicacion;
  private $distribuidor_id;
  private $password;
  private $recovery_key;

  public function setId($id){
    $this->id=$id;
  }

  public function setidentificacion($identificacion){
    $this->identificacion=$identificacion;
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

  public function setUbicacion($ubicacion){
    $this->ubicación=$ubicacion;
  }

  public function setDistribuidor_id($distribuidor_id){
    $this->distribuidor_id=$distribuidor_id;
  }

  public function setPassword($password){
    $this->password=$password;
  }

  public function setRecovery_key($recovery_key){
    $this->recovery_key=$recovery_key;
  }

  public function getId($id){
    return $this->id;
  }

  public function getidentificacion(){
    return $this->identificacion;
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

  public function getUbicacion(){
    return $this->ubicacion;
  }

  public function getDistribuidor_id(){
    return $this->distribuidor_id;
  }

  public function getPassword(){
    return $this->password;
  }
  
  public function getRecovery_key(){
    return $this->recovery_key;
  }
  
  public function save(){
    try{
      $query = $this->prepare('INSERT INTO cliente(identificacion, nombre, correo, telefono, ubicacion, distribuidor_id, password, recovery_key) VALUES (:identificacion, :nombre, :correo, :telefono, :ubicacion, :distribuidor_id, :password, :recovery_key)');
      $query->execute([
        'identificacion'=>$this->identificacion,
        'nombre'=>$this->nombre,
        'correo'=>$this->correo,
        'telefono'=>$this->telefono,
        'ubicacion'=>$this->ubicacion,
        'distribuidor_id'=>$this->distribuidor_id,
        'password'=>$this->password,
        'recovery_key'=>$this->recovery_key
      ]);
      if($query->rowCount()){
        return true;
      }else{
        return false;
      }
    }catch(PDOException $e){
      error_log('ClientModel::save->PDOException ' .$e);
      return false;
    }
  }

  public function getAll(){
    $items = [];
    try{
      $query = $this->query('SELECT * FROM cliente');
      while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
        $item = new ClienteModel();
        $item->from($p);
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      error_log('ClientModel::getAll->PDOException ' .$e);
      return false;
    }
  }

  public function get($id){
    try{
      $query = $this->prepare('SELECT * FROM cliente WHERE id=:id');
      $query->execute([
        'id'=>$id
      ]);
      $client = $query->fetch(PDO::FETCH_ASSOC);
      $this->from($client);
      return $this;
    }catch(PDOException $e){
      error_log('ClientModel::get->PDOException ' .$e);
      return false;
    }
  }

  public function delete($id){
    try{
      $query = $this->prepare('DELETE FROM cliente WHERE id=:id');
      $query->execute([
        'id'=>$id
      ]);
      return true;
    }catch(PDOException $e){
      error_log('ClientModel::delete->PDOException ' .$e);
      return false;
    }
  }

  public function update(){
    try{
      $query = $this->prepare('UPDATE cliente SET identificacion=:identificacion, nombre=:nombre, correo=:correo, telefono=:telefono, ubicacion=:ubicacion, distribuidor_id=:distribuidor_id, password=:password, recovery_key=:recovery_key WHERE id=:id');
      $query->execute([
        'identificacion'=>$this->identificacion,
        'nombre'=>$this->nombre,
        'correo'=>$this->correo,
        'telefono'=>$this->telefono,
        'ubicacion'=>$this->ubicacion,
        'distribuidor_id'=>$this->distribuidor_id,
        'password'=>$this->password,
        'recovery_key'=>$this->recovery_key,
        'id'=>$this->id
      ]);
      if($query->rowCount()){
        return true;
      }else{
        return false;
      }
    }catch(PDOException $e){
      error_log('ClientModel::update->PDOException ' .$e);
      return false;
    }
  }

  public function from($id){
    $this->identificacion=array('identificacion');
    $this->nombre=array('nombre');
    $this->correo=array('correo');
    $this->telefono=array('telefono');
    $this->ubicacion=array('ubicacion');
    $this->distribuidor_id=array('distribuidor_id');
    $this->password=array('password');
    $this->recovery_key=array('recovery_key');
  }

  public function getAllByUserId($userid){
    try{
      $items= [];
      $query = $this->prepare('SELECT * FROM cliente WHERE distribuidor_id=:id');
      $query->execute([
        'id'=>$userid
      ]);
      while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
        $item = new ClienteModel();
        $item->from($p);
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      error_log('ClientModel::get->PDOException ' .$e);
      return NULL;
    }
  }

  public function getByUserIdAndLimit($userid, $n){
    try{
      $items= [];
      $query = $this->prepare('SELECT * FROM cliente WHERE distribuidor_id=:id ORDER BY cliente.id DESC LIMIT 0, :n');
      $query->execute([
        'id'=>$userid,
        'n'=>$n
      ]);
      while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
        $item = new ClienteModel();
        $item->from($p);
        array_push($items, $item);
      }
      return $items;
    }catch(PDOException $e){
      error_log('ClientModel::get->PDOException ' .$e);
      return NULL;
    }
  }
  
}

?>