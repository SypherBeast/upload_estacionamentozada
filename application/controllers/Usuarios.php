<?php 

defined ('BASEPATH') OR exit('Ação não Permitida');

class Usuarios extends CI_Controller {

    public function index() {

   $data = array(
     'titulo' => 'Usuarios cadastrados',
     $users = $this->ion_auth->users()->result(), // get all users

    );
        $this->load->view('layout/header', $data);
        $this->load->view('usuarios/index');
        $this->load->view('layout/footer');
    }

}