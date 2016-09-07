<?php

class Clientes extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('clientes/index');
	}
         public function add(){
            if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('nome','sobrenome','login','senha','grupo'), new Cliente());
                $novo->save();
                
            }
            $this->render('clientes/add');
        }
}
?>
