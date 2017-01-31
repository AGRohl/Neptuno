<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Controlador de cliente
 */
class Cliente extends CI_Controller{
    //put your code 
    public function __construct() {
        parent::__construct();
        $this->load->model('Neptuno');
    }
    
    public function det_cliente() // mostrar detalle de un cliente
    {
        //$this->load->helper('form');
        //$this->load->library('form_validation');
        $data['title'] = 'Detalle del Cliente';
        //$this->form_
        $this->load->view('cabecera', $data);
        $this->load->helper('url'); //para manipular la url
        $idCliente = $this->uri->segment(3); //el parámetro
        $data['det_cliente'] = $this->Neptuno->det_cliente($idCliente);       
        $this->load->view('cliente/detalle_cliente', $data);
        $this->load->view('pie');
    }
    
    public function add_cliente(){ // para añadir un cliente
        $this->load->helper('form'); // cargamos libreria formulario
        $this->load->helper('url'); // cargamos libreria url
        $this->load->library('form_validation'); // cargamos libreria validacion
        $this->load->library('session'); // flashdata?? datos temporales sesion
        $data['title']='Alta de Clientes';
        //$this->form_validation->set_rules('nombreCli', 'Nombre', 'required');
        //$this->form_validation->set_rules('codCliente', 'Código', 'required');
        
        // Creamos las reglas de validacion para los campos
        $this->form_validation->set_rules('nombreCli', 'nombre del cliente', 'required', ['required'=>'No se te puede olvidar el %s']);
        $this->form_validation->set_rules('codCliente', 'código de cliente', 'required|exact_length[5]|alpha|is_unique[cliente.codCliente]|strtoupper');
        $this->form_validation->set_rules('direccion', 'dirección del cliente', 'required|trim');
        $this->form_validation->set_rules('ciudad', 'ciudad del cliente', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('cpostal', 'código postal', 'required|exact_length[5]|numeric');
        $this->form_validation->set_rules('idPais', 'código de país del cliente', 'required|exact_length[3]|strtoupper|alpha|in_list[USA,ESP,FRA,POR,DEU,FIN]');
        $this->form_validation->set_rules('telefono', 'teléfono del cliente', 'required|numeric');
        $this->form_validation->set_rules('fax', 'fax del cliente', 'required|numeric');
        
        // Si no es válido se recarga la página
        if ($this->form_validation->run() === FALSE){
            $this->load->view('cabecera',$data);
            $this->load->view('cliente/create');
            $this->load->view('pie');
        }
        else // creamos un array con los datos introducidos
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
            $this->Neptuno->add_cliente($data); // pasamos los datos al modelo
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Cliente añadido satisfactoriamente</div>');
            // lo de arriba es para añadir un mensaje de todo correcto
            redirect(current_url()); // redirecciona a la página de creación
//            $this->load->view('cliente/success');
            
        }
    }
    public function edit_cliente(){ // para editar un cliente
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->loas->library('session');
        $data['title']='Edición de Clientes';
        $idCliente = $this->uri->segment(3);
        $data['det_cliente'] = $this->Neptuno->det_cliente($idCliente);
//        $this->form_validation->set_rules('nombreCli', 'Nombre', 'required');
//        $this->form_validation->set_rules('codCliente', 'Código', 'required');
        $this->form_validation->set_rules('nombreCli', 'nombre del cliente', 'required', ['required'=>'No se te puede olvidar el %s']);
        $this->form_validation->set_rules('codCliente', 'código de cliente', 'required|exact_length[5]|alpha|is_unique[cliente.codCliente]|strtoupper');
        $this->form_validation->set_rules('direccion', 'dirección del cliente', 'required|trim');
        $this->form_validation->set_rules('ciudad', 'ciudad del cliente', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('cpostal', 'código postal', 'required|exact_length[5]|numeric');
        $this->form_validation->set_rules('idPais', 'código de país del cliente', 'required|exact_length[3]|strtoupper|alpha|in_list[USA,ESP,FRA,POR,DEU,FIN]');
        $this->form_validation->set_rules('telefono', 'teléfono del cliente', 'required|numeric');
        $this->form_validation->set_rules('fax', 'fax del cliente', 'required|numeric');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('cabecera',$data);
            $this->load->view('cliente/edita',$data);
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
            $this->Neptuno->update_cliente($data);
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Cliente añadido satisfactoriamente</div>');
            redirect(current_url());
//            $this->load->view('cliente/success');
        }
    }
}
