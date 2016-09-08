<?php

class Enderecos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('enderecos/index');
	}
        public function add(){
           if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('cep','logradouro','bairro','cidade','estado'), new Endereco());
                $novo->save();
                $this->render('enderecos/index');
           }else{
                $this->render('enderecos/add');
           }
            
        }
        public function edit(){

		$this->render('enderecos/edit');
	}
}
?>
