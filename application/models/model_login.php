<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

  function __construct(){
    parent::__construct();
  }

	public function consultaUser($user,$contra){
    $sql="SELECT u.usuario,u.contrasena, r.nombre_rol
    FROM usuario u, roles r
    WHERE u.rol= r.id
    AND u.usuario='$user'
    AND u.contrasena='$contra'";
    $query=$this->db->query($sql);
    return $query->row();//retornar un solo resultado
    //return $query->result(); para retornar varios resultados
	}

  public function consultaUsusarios(){
    $sql="SELECT * from usuario";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function consultaServicios(){
    $sql="SELECT * from servicios";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function consultaReservas(){
    $sql="SELECT * from reservas r
    WHERE r.Estado=2";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function consultaClientes(){
    $sql="SELECT * from reservas r
    WHERE r.Estado=1";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function eUsusario($id){
    $this->db->delete('usuario',array('id'=>$id));

  }

  public function mUsuario($user,$pass,$id){
    $this->db->WHERE('id',$id);
    $this->db->update('usuario',array('usuario'=>$user,'contrasena'=>$pass));

  }

  public function aAgregar($user,$pass,$rol){

    $this->db->insert('usuario',array('usuario'=>$user,'contrasena'=>$pass,'rol'=>$rol));

  }
}
