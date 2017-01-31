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
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="lead">
                    <?php echo $title; ?>
                </p>
            </div>
            <div class="col-md-8 ">
                <a href="<?php echo 'cliente/add_cliente/';?>" class="btn btn-primary centered" role="button">Añadir</a>
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-8 ">
                <a href="<?php// echo 'cliente/add_cliente/';?>" class="btn btn-primary" role="button">Añadir</a>
            </div>-->
            
        
        </div>
        <br/>
        <?php
        foreach ($clientes as $cliente): ?>
        <div class="row">
            <div class="col-md-4">
                <?php echo $cliente->nombreCli; ?>
            </div>
            <div class="col-md-4">
                <?php echo $cliente->direccion; ?>
            </div>
            <div class="col-md-2">
                <a href="<?php echo 'pedido/lisped/'.$cliente->idCliente; ?>">pedidos</a>
            </div>
            <div class="col-md-2">
                <a href="<?php echo 'cliente/det_cliente/'.$cliente->idCliente; ?>">detalle cliente</a>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</html>