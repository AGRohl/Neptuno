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
        <div class="row">
            <div class="col-md-2">
                <h4>Cod.Producto</h4>
            </div>
            <div class="col-md-4">
                <h4>Producto</h4>
            </div>
            <div class="col-md-2">
                <h4>Cantidad</h4>
            </div>
            <div class="col-md-2">
                <h4>Precio</h4>
            </div>
            <div class="col-md-2">
                <h4>Total</h4>
            </div>
        </div>
        <?php
        foreach ($detalles as $detalle): ?>
        <div class="row">
            <div class="col-md-2">
                <?php echo $detalle->idProducto; ?>
            </div>
            <div class="col-md-4">
                <?php echo $detalle->nombreProd; ?>
            </div>
            <div class="col-md-2">
                <?php echo $detalle->cantidad; ?>
            </div>
            <div class="col-md-2">
                <?php echo $detalle->precioE; ?>
            </div>
            <div class="col-md-2">
                <?php echo ($detalle->cantidad)*($detalle->precioE); ?>
            </div>
            <!-- <div class="col-md-4">
                <a href="<?php// echo 'pedido/lisped/'.$cliente->idCliente; ?>">pedidos</a>
            </div> -->
        </div>
        <?php
        endforeach;
        ?>
    </div>
</html