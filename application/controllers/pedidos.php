<?php

class Pedidos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $ped = new Pedido();
        $ped->get();
        $this->data['valores'] = $ped->all_to_array();

        $this->render('pedidos/index');
    }

    public function add() {
        $fun = new Funcionario();
        $fun->get();
        $this->data['valoresF'] = $fun->all_to_array();

        $cli = new Cliente();
        $cli->get();
        $this->data['valoresC'] = $cli->all_to_array();

        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cliente_id', 'funcionario_id'), new Pedido());
            $novo->data_cadastro = date('Y/m/d H:i:s');
            $novo->save();
            redirect('pedidos');
        } else {
            $this->render('pedidos/add');
        }
    }

    public function edit() {

        $this->render('pedidos/edit');
    }

    public function show($id) {

        $ped = new Pedido();
        $ped->getById($id);
        $this->render('pedidos/show');
    }

}

?>
