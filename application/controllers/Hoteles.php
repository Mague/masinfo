<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hoteles extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hotelesdb');
	}

	public function index()
	{
		echo time();
		$this->load->view('hoteles');
	}

	public function add(){
		$nombre=$this->security->xss_clean(strip_tags($this->input->post('nombre')));
		$provincia=$this->security->xss_clean(strip_tags($this->input->post('provincia')));
		$categoria=$this->security->xss_clean(strip_tags($this->input->post('categoria')));
		$portada=$this->security->xss_clean(strip_tags($this->input->post('portada')));
		$qems=$this->security->xss_clean(strip_tags($this->input->post('qems')));
		$bienvenido=$this->security->xss_clean(strip_tags($this->input->post('bienvenido')));
		$habitaciones=$this->security->xss_clean(strip_tags($this->input->post('habitaciones')));
		$instalaciones=$this->security->xss_clean(strip_tags($this->input->post('instalaciones')));
		$servicios=$this->security->xss_clean(strip_tags($this->input->post('servicios')));
		$accesos=$this->security->xss_clean(strip_tags($this->input->post('accesos')));
		$videinterpretacion=$this->security->xss_clean(strip_tags($this->input->post('videinterpretacion')));
		$faq=$this->security->xss_clean(strip_tags($this->input->post('faq')));
		$created=time();
		$usuario=$this->session->userdata('id_usuario');
		$id_hotel=$this->Hotelesdb->add($nombre, $provincia, $categoria, $portada, $created, $usuario);
		if(!empty($id_hotel)){
			$this->Hotelesdb->addInfoHotel($id_hotel,$qems,$bienvenido,$habitaciones,$instalaciones,$servicios,$accesos,$videinterpretacion,$faq);
		}
		$this->sendJson(array("status"=>"ok"));
	}
	private function sendJson($data){
		header("Content-Type:application/json");
		echo json_encode($data);
	}
	public function update(){
		
	}

	public function delete(){

	}

}

/* End of file Hoteles.php */
/* Location: ./application/controllers/Hoteles.php */