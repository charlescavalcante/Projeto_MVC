<?php

class Endereco extends Model {
    protected $tabela = 'enderecos';
    #protected $one_to_one = array();
    #protected $one_to_many = array();	
    ##protected $many_to_many = array();

    
    public function __construct(){
		parent::__construct();
    }
    
    public function showValues() {
        $obj = new Endereco();
        $obj->get();
        $this->data['endereco'] = $obj->all_to_array();
    }
}
?>
