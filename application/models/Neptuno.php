<?php

/* 
 * Modelo conexión a Neptuno
 */

class Neptuno extends CI_Model {

        public function __construct()
        {       
            parent::__construct();
            $this->load->database();
        }
        public function get_clientes($limites = FALSE)
        {
            if ($limites !== FALSE)
            {
                $this->db->limit($limites['cuantos'],$limites['inicio']);
                
            }
            $query = $this->db->get('cliente');
            return $query->result();
        }
        public function get_pedidos($cliente = FALSE)
        {
            if ($cliente !== FALSE)
            {
                $this->db->where('idCliente',$cliente);
            }
            $query = $this->db->get('pedido');
            return $query->result();
        }
        public function add_cliente($cliente)
        {
            $this->db->insert('cliente',$cliente);
        }
}



