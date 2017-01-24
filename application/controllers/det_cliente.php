<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Cliente extends CI_Controller{
    //put your code 
    public function __construct() {
        parent::__construct();
        $this->load->model('neptuno');
    }
    
    public function add(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title']='Alta de Clientes';
        $this->form_validation->set_rules('nombreCli', 'Nombre', 'required');
        $this->form_validation->set_rules('codCliente', 'Código', 'required');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('cabecera',$data);
            $this->load->view('cliente/create');
            $this->load->view('pie');
        }
        else
        {
            $data = array(
                'nombreCli' => $this->input->post('nombreCli'),
                'codCliente' => $this->input->post('codCliente'),
                'direccion' => $this->input->post('direccion'),
                'ciudad' => $this->input->post('ciudad'),
                'cpostal' => $this->input->post('cpostal'),
                'idPais' => $this->input->post('idPais'),
                'telefono' => $this->input->post('telefono'),
                'fax' => $this->input->post('fax')
            );
            $this->Neptuno->add_cliente($data);
            $this->load->view('cliente/success');
        }
    }
}
