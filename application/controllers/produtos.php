<?php

class Produtos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $pro = new Produto();
        $pro->get();
        $this->data['valores'] = $pro->all_to_array();

        $this->render('produtos/index');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('categoria_id', 'descricao', 'fornecedor_id', 'id', 'quantidade', 'valor'), new Produto());
            $novo->save();
            $this->render('usuarios/index');
        } else {
            $this->render('usuarios/add');
        }
    }

    public function edit() {

        $this->render('produtos/edit');
    }

}

?>
