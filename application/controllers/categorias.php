<?php

class Categorias extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('categorias/index');
	}
       
        public function add(){
           if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('nome'), new Categoria());
                $novo->save();
                $this->render('categorias/index');
           }else{
                $this->render('categorias/add');
           }
            
        }
}
?>
