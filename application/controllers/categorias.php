<?php

class Categorias extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $cat = new Categoria();
        $cat->get();
        $this->data['valores'] = $cat->all_to_array();

        $this->render('categorias/index');
    }

    public function add() {
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('nome'), new Categoria());
            $novo->save();
            redirect('categorias');
        } else {
            $this->render('categorias/add');
        }
    }

    public function edit() {

        $this->render('categorias/edit');
    }
    public function show($id) {

        $cat = new Categoria();
        $cat->getById($id);
        $this->render('categorias/show');
    }
}

?>
