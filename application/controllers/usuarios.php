<?php

class Usuarios extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){
                # Render é Função que carrega a view
		$this->render('usuarios/index');
	}

        public function add(){
            $this->render('usuarios/add');
        }

        public function edit(){
            $this->render('usuarios/edit');
        }

        public function delete(){

        }
}

?>