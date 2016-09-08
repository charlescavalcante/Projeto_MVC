<?php

class Usuarios extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

		$this->render('usuarios/index');
	}

        public function add(){
           if(isset ($_POST['submit'])){
                $novo = $this->post_to_obj(array('nome','sobrenome','login','senha','grupo'), new Usuario());
                $novo->save();
                $this->render('usuarios/index');
           }else{
                $this->render('usuarios/add');
           }
            
        }
//        public function add() {
//            $obj = new Usuario;
//            $obj->nome = 'Charles';
//            $obj->sobrenome= 'Cavalcante';
//            $obj->login = 'charles';
//            $obj->senha= '15234';
//            $obj->grupo= 'gerente';
//            $obj->save();
//            $this->render('usuarios/add');
//            
//        }
        
  

}
?>
