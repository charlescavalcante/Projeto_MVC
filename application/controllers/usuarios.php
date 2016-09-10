<?php

class Usuarios extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $user = new Usuario();
        $user->get();
        $this->data['valores'] = $user->all_to_array();

        $this->render('usuarios/index');
    }

    public function edit() {
        $this->render('usuarios/edit');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('nome', 'sobrenome', 'login', 'senha', 'grupo'), new Usuario());
            $novo->save();
            redirect('usuarios');
        } else {
            $this->render('usuarios/add');
        }
    }
public function show($id) {

        $usu = new Usuario();
        $usu->getById($id);
        $this->render('usuarios/show');
    }
}
