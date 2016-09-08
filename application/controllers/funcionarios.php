<?php

class Funcionarios extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('funcionarios/index');
	}
	public function add(){

		$this->render('funcionarios/add');
	}
}
?>
