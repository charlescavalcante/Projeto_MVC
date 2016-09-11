<?php

class Produtos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $pro = new Produto();
        $pro->get();
        $this->data['valores'] = $pro->all_to_array();
        $this->render('produtos/index');
    }

    public function add() {
        $for = new Fornecedor();
        $for->get();
        $this->data['valoresF'] = $for->all_to_array();
        $cat = new Categoria();
        $cat->get();
        $this->data['valoresC'] = $cat->all_to_array();
        if (isset($_POST['submit'])) {
            $novo = $this->post_to_obj(array('categoria_id', 'descricao', 'fornecedor_id','quantidade', 'valor'), new Produto());
            $novo->save();
            redirect('produtos');
        } else {
            $this->render('produtos/add');
        }
    }

    public function edit() {

        $this->render('produtos/edit');
    }

    public function show($id) {

        $pro = new Produto();
        $pro->getById($id);
        $this->render('produtos/show');
    }

}

?>
