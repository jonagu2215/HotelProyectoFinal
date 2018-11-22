<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }

	public function index()
	{
		$this->load->view('view_login_admin');
	}

  public function validadAcceso(){
    $user = $this-> input ->post('user');
    $pass = $this-> input ->post('pass');

    $result = $this->model_login->consultaUser($user,$pass);

    if (count($result)==1) {

      $session=array(
        'USUARIO' => $result->usuario,
        'CONTRASEÑA' => $result->contrasena,
        'ROL' => $result->nombre_rol,
        'is_logged_in' => TRUE,
      );
      $this->session->set_userdata($session);

      if ($result->nombre_rol=='Admin') {
        //ira a la pagina del Administrador
        redirect(base_url()."index.php/login_admin/home_admin");
      }elseif ($result->nombre_rol=='cliente') {
        //ira a la pagina del cliente
        redirect(base_url()."index.php/login_admin/home_cliente");
      }elseif ($result->nombre_rol=='camarero') {
        //ira a la pagina de empleado
        redirect(base_url()."index.php/login_admin/home_empleado");
      }

    }else {
      echo "NO ESTA REGISTRADO";
    }
  }

  public function home_admin(){
    $result['usuari'] = $this->model_login->consultaUsusarios();
    //$this->load->view('header_admin');
    $this->load->view('view_home_admin',$result);

  }

  public function admin_servicios(){
    $result['servi'] = $this->model_login->consultaServicios();
    $this->load->view('view_admin_servicios',$result);
  }

  public function admin_reservas(){
    $result['reser'] = $this->model_login->consultaReservas();
    $this->load->view('view_admin_reservas',$result);
  }

  public function admin_clientes(){
    $result['cliente'] = $this->model_login->consultaClientes();
    $this->load->view('view_admin_clientes',$result);
  }

  public function eliminaUsuario($id){
    $this->model_login->eUsusario($id);
    redirect(base_url()."index.php/login_admin/home_admin");


  }

  public function modificarUsuario($id){
    $user = $this-> input ->post('user');
    $pass = $this-> input ->post('pass');
    $this->model_login->mUsuario($user,$pass,$id);
    redirect(base_url()."index.php/login_admin/home_admin");
  }

  public function agregaUsuario(){
    $user = $this-> input ->post('user');
    $pass = $this-> input ->post('pass');
    $rol = $this-> input ->post('rol');
    $this->model_login->aAgregar($user,$pass,$rol);
    redirect(base_url()."index.php/login_admin/home_admin");
  }


  public function home_cliente(){
    $this->load->view('view_home_cliente');
  }

  public function home_empleado(){
    $this->load->view('view_home_empleado');
  }
}
