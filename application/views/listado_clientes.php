<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <div class="container">
        <h2>
            <?php echo $title; ?>
        </h2>
        <?php
        foreach ($clientes as $cliente): ?>
        <div class="row">
            <div class="col-md-4">
                <?php echo $cliente->nombreCli; ?>
            </div>
            <div class="col-md-4">
                <?php echo $cliente->direccion; ?>
            </div>
            <div class="col-md-4">
                <a href="<?php echo 'pedido/cliente/'.$cliente->idCliente; ?>">pedidos</a>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</html>