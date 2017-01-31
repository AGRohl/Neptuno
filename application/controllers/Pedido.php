<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Controlador principal
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Neptuno');
    }
    public function index() //método de inicio
    {
        $data['title'] = 'Listado Clientes'; // variable de título
        $this->load->view('cabecera', $data); // cargamos vista cabecera
        //$this->load->helper('url');
        $data['clientes'] = $this->Neptuno->get_clientes(); //
        $this->load->view('listado_clientes', $data);
        $this->load->view('pie'); //no necesita pasarle los datos
    }
    public function lisped() // método listado de pedidos
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
   
}