<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author pemaza
 */
class Modulo extends MX_Controller {

    public function index() {

        $this->load->view("modulo");
    }

    public function cadastroClientes($resposta = '0') {

        $dados = array("erro" => $resposta);

        $this->load->view("/clientes/cadastro_clientes.php", $dados);
    }

    public function storeClientes() {

        $dados = array("nomecliente" => $this->input->post("nome"),
            "dtnascimento" => mdate('%Y-%m-%d', strtotime($this->input->post("dtnascimento"))),
            "telefone" => $this->input->post("telefone"),
            "email" => $this->input->post("email"),
            "observacao" => $this->input->post("obs"),
            "cpf_cli" => $this->input->post("cpf"));

          
        
        print_r(($dados));

       /* $this->load->model('cliente_model');
        $this->cliente_model->insertCliente($dados);
        $resposta="Realizado com Sucesso!!!";
        $this->cadastroClientes($resposta);*/
    }
    
    
    
    
    

}
