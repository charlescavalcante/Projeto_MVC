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
            $this->render('usuarios/index');
        } else {
            $this->render('usuarios/add');
        }
    }

}
