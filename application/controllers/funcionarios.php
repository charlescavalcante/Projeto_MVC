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
        $end = new Endereco();
        $end->get();
        $this->data['valores'] = $end->all_to_array();

        $car = new Cargo();
        $car->get();
        $this->data['valCar'] = $car->all_to_array();
        $this->view('funcionarios/add', $this->data);
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cargo_id', 'endereco_id', 'entrada', 'id', 'nome', 'telefone'), new Funcionario());
            $novo->entrada = date('Y/m/d H:i:s');
            $novo->save();
            redirect('funcionarios');
        } else {
            $this->render('funcionarios/add');
        }
    }

    public function edit($id) {

        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cargo_id', 'endereco_id', 'entrada', 'id', 'nome', 'telefone'), new Funcionario());
            $novo->entrada = date('Y/m/d H:i:s');
            $novo->save();
            redirect('funcionarios');
        }
        $end = new Endereco();
        $end->get();
        $this->data['valoresE'] = $end->all_to_array();
        

        $car = new Cargo();
        $car->get();
        $this->data['valoresC'] = $end->all_to_array();
        
        $this->fun->getById($id);
        $this->data['edit_fun'] = $this->fun->to_array();
        $this->render('funcionarios/edit');
    }
    public function show($id) {

        $fun = new Funcionario();
        $fun->getById($id);
        $this->render('funcionarios/show');
    }

}

?>
