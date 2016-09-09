<?php

class Pedidos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('pedidos/index');
	}

        public function add(){
   if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cliente_id', 'data_cadastro', 'funcionario_id', 'id'), new Pedido());
            $novo->save();
            $this->render('pedidos/index');
        } else {
            $this->render('pedidos/add');
        }
	}
        public function edit(){

		$this->render('pedidos/edit');
	}
}
?>
