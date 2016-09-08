<?php

class Produtos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('produtos/index');
	}
	public function add(){

		$this->render('produtos/add');
	}
}
?>
