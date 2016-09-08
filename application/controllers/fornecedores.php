<?php

class Fornecedores extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('fornecedores/index');
	}
	public function add(){

		$this->render('fornecedores/add');
	}
}
?>
