<?php

class Clientes extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $cli = new Cliente();
        $cli->get();
        $this->data['valores'] = $cli->all_to_array();
        $this->render('clientes/index');
    }

    public function add() {
        $end = new Endereco();
        $end->get();
        $this->data['valores'] = $end->all_to_array();
        $this->view('clientes/add', $this->data);
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('nome', 'cpf', 'telefone', 'renda', 'endereco_id'), new Cliente());
            $novo->data_cadastro = date('Y/m/d H:i:s');
            $novo->save();
            redirect('clientes');
        } else {
            $this->render('clientes/add');
        }
    }

    public function edit() {

        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('nome', 'cpf', 'telefone', 'renda', 'data_cadastro', 'endereco_id'), new Cliente());
            $novo->update();
            $this->index();
        } else {
            $this->render('clientes/edit');
        }
    }

    public function show($id) {

        $cli = new Cliente();
        $cli->getById($id);
        $this->render('clientes/show');
    }

}

?>
