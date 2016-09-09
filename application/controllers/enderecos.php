<?php

class Enderecos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index() {
            $cli = new Endereco();
            $cli->get();
            //print_r($cli->to_array()).'<br><br>';
            //print_r($cli->all_to_array());
            $this->data['valores'] = $cli->all_to_array();
            $this->view('enderecos/index', $this->data);
            //$this->data['valores'] = "all_to_array";
            //print_r($this->data['valores']);
            $val = array();
            $val = $this->data['valores'];

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
        
        public function edit() {
            if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('cep','logradouro','bairro','cidade','estado'), new Endereco());
                $novo->update();
                
                $this->render('enderecos/index');
            }else{
                $this->render('enderecos/edit');
            }
        }
        public function show() {
            $endereco = new Endereco();
            $endereco->get();
            
        }
        public function edit(){

		$this->render('enderecos/edit');
	}
}
?>
