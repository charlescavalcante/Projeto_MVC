<?php

class Cargos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('cargos/index');
	}
        public function add(){
            if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('descricao','salario'), new Cargo());
                $novo->save();
                
            }
            $this->render('cargos/add');
        }
}
?>
