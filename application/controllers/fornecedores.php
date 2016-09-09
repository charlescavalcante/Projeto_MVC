<?php

class Fornecedores extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $for = new Fornecedor();
        $for->get();
        $this->data['valores'] = $for->all_to_array();

        $this->render('fornecedores/index');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cnpj', 'endereco_id', 'id', 'nome', 'telefone'), new Fornecedor());
            $novo->save();
            $this->render('fornecedores/index');
        } else {
            $this->render('fornecedores/add');
        }
    }

    public function edit() {

        $this->render('fornecedores/edit');
    }

}

?>
