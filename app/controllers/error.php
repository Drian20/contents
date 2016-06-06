<?php

	final class Error extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mError;
			$this->view=new vError;
		}
		function home(){
			
		}
		function redireccionar(){
			$this->json_out(array('redirect' => APP_W));
		}
	}