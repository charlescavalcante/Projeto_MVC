<?php

function base_url($uri = null){
	require('application/config/URLHelper.php');
	return $config['base_url'].$uri;
}

function base_assets(){
	return base_url().'assets/';
}

function redirect($uri = null){
	header("location:".base_url($uri));
}

function get_site_title(){
    require('application/config/URLHelper.php');
	return $config['title'];
}
