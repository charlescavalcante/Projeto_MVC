<?php

class Clientes extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

//	public function index(){
//
//		$this->render('clientes/index');
//	}
        public function index() {
            
            $this->render('clientes/index');
    }
        
        public function add(){
           if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('nome','cpf','telefone','renda','endereco_id'), new Cliente());
                $novo->save();
                $this->render('clientes/index');
           }else{
                $this->render('clientes/add');
           }
           $cli = new Endereco();
            $cli->get();
            //print_r($cli->to_array()).'<br><br>';
            //print_r($cli->all_to_array());
            $this->data['valores'] = $cli->all_to_array();
            $this->view('clientes/add', $this->data);
            //$this->data['valores'] = "all_to_array";
            //print_r($this->data['valores']);
            $val = array();
            $val = $this->data['valores'];
            
        }
        
//        public function show() {
//            $endereco = new Endereco();
//            $endereco->get();
//            $this->data['valores']=$endereco->all_to_array();
//        }
        
}
?>
