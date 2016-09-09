<?php

class Clientes extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

        public function index() {
            $cli = new Cliente();
            $cli->get();
            $this->data['valores'] = $cli->all_to_array();
            $this->render('clientes/index');
        }
        
        public function add(){
           $end = new Endereco();
           $end->get();
           $this->data['valores'] = $end->all_to_array();
           $this->view('clientes/add', $this->data);
           if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('nome','cpf','telefone','renda','endereco_id'), new Cliente());
                $novo->save();
                $this->render('clientes/index');
           }else{
                $this->render('clientes/add');
           }
           

        }
        public function edit(){

		$this->render('clientes/edit');
	}
       
        
}
?>
