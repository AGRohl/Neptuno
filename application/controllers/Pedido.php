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
        $this->load->model('neptuno');
    }
    public function cliente() //método para obtener listado clientes
    {
        $data['clientes'] = $this->neptuno->get_clientes();
        $data['title'] = 'Listado Clientes';
        $this->load->view('listado_clientes',$data);
    }
    public function pedido()
    {
        $data['pedido']= $this->neptuno->get_pedidos();
        $data['title'] = 'Listado de pedidos por cliente';
        $this->load->view('listado_pedidos',$data);
    }
}