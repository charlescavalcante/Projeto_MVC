<?php

class Funcionarios extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $fun = new Funcionario();
        $fun->get();
        $this->data['valores'] = $fun->all_to_array();

        $this->render('funcionarios/index');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cargo_id', 'endereco_id', 'entrada', 'id', 'nome', 'telefone'), new Funcionario());
            $novo->save();
            $this->render('funcionarios/index');
        } else {
            $this->render('funcionarios/add');
        }
    }

    public function edit() {

        $this->render('funcionarios/edit');
    }

}

?>
