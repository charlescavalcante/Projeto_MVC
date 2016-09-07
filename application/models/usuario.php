<?php

class Usuario extends Model {
    protected $tabela = 'usuarios';
    #protected $one_to_one = array('nome','sobrenome','login','senha','cargo');
    #protected $one_to_many = array();	
    ##protected $many_to_many = array();

    
    public function __construct(){
		parent::__construct();
    }
    
}
?>
