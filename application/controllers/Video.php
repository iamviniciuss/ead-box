<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Aulas', 'aulas');        
		$this->load->model('Modulo', 'modulos');        
		$this->load->model('Questionario', 'questionario');        
		$this->load->model('Videos', 'video');    
		if (!$this->aluno->isLogged()) {
			header('location:'.base_url(''));
		}    
		
	}

	public function index(){
		header('location:'.base_url('login'));		
	}

}