<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Neptuno');
    }
    public function index()
    {
        $data['title'] = 'Listado Clientes';
        $this->load->view('cabecera', $data);
        //$this->load->helper('url');
        $data['clientes'] = $this->Neptuno->get_clientes();
        $this->load->view('listado_clientes', $data);
        $this->load->view('pie'); //no necesita pasarle los datos
    }
    public function lisped()
    {
        $data['title'] = 'Listado Pedidos';
        $this->load->view('cabecera', $data);
        $this->load->helper('url'); //para manipular la url
        $idCliente = $this->uri->segment(3); //el parámetro
        $data['pedidos'] = $this->Neptuno->get_pedidos($idCliente);       
        $this->load->view('listado_pedidos', $data);
        $this->load->view('pie');
    }
    public function detalle()
    {
        $data['title'] = 'Listado Detalle Pedido';
        $this->load->view('cabecera', $data);
        $this->load->helper('url'); //para manipular la url
        $idPedido = $this->uri->segment(3); //el parámetro
        $data['detalles'] = $this->Neptuno->get_detalles($idPedido);       
        $this->load->view('detalle_pedido', $data);
        $this->load->view('pie');
    }
    public function det_cliente()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Detalle del Cliente';
        $idCliente = $this->uri-segment(3);
        $this->load->view('cabecera',$data);
        $data['cliente'] = $this->Neptuno->det_cliente($idCliente);
        $this->form_validation->set_rules('nombreCli', 'Nombre', 'required');
        $this->form_validation->set_rules('codCliente', 'Código', 'required');
        //if ($this->form_validation->run() === FALSE){
            
            $this->load->view('cliente/edita');
            $this->load->view('pie');
        //}
        //else
        /*{
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
            $this->neptuno->add_cliente($data);
            $this->load->view('cliente/success');
        }*/
        
    }
    
    public function alta_cliente()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Alta Nuevo Cliente';
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
            $this->neptuno->add_cliente($data);
            $this->load->view('cliente/success');
        }
        
    }
}