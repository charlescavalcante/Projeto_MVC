<?php

class Enderecos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $end = new Endereco();
        $end->get();
        $this->data['valores'] = $end->all_to_array();
        $this->render('enderecos/index');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('cep', 'logradouro', 'bairro', 'cidade', 'estado'), new Endereco());
            $novo->save();
            redirect('enderecos');
        } else {
            $this->render('enderecos/add');
        }
    }

public function edit($id) {
        $this->edEnd->getById($id);
        $this->data['edit_end'] = $this->edEnd->to_array();
        $this->render('enderecos/edit');
    }

    public function show($id) {

        $end = new Endereco();
        $end->getById($id);
        $this->render('enderecos/show');
    }

}

?>
