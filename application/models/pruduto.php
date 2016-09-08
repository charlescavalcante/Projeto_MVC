<?php

class Produto extends Model {
    protected $tabela = 'produtos';
    #protected $one_to_one = array();
    #protected $one_to_many = array();	
    ##protected $many_to_many = array();

    
    public function __construct(){
		parent::__construct();
    }
    
}
?>
