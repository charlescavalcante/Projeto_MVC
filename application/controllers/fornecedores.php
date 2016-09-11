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
        $end = new Endereco();
        $end->get();
        $this->data['valores'] = $end->all_to_array();
        $this->view('fornecedores/add', $this->data);
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('nome', 'cnpj', 'telefone', 'endereco_id'), new Fornecedor());
            $novo->save();
            redirect('fornecedores');
        } else {
            $this->render('fornecedores/add');
        }
    }

    public function edit() {

        $this->render('fornecedores/edit');
    }

    public function show($id) {

        $for = new Fornecedores();
        $for->getById($id);
        $this->render('fornecedores/show');
    }

}

?>
