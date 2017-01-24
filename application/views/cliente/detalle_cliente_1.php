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
        <?php foreach ($det_cliente as $cliente): ?>
        <div class="row bg-success">
            <div class="col-md-2">
                Código Cliente
            </div>
            <div class="col-md-4">
                <?php echo $cliente->codCliente;?>
            </div>
        
        
            <div class="col-md-2">
                Nombre
            </div>
            <div class="col-md-4">
                <?php echo $cliente->nombreCli;?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                Direccion
            </div>
            <div class="col-md-4">
                <?php echo $cliente->direccion;?>
            </div>
        
            <div class="col-md-2">
                Ciudad
            </div>
            <div class="col-md-4">
                <?php echo $cliente->ciudad;?>
            </div>
            
        </div>
        <br>
        <div class="row bg-success">
            <div class="col-md-2">
                Región
            </div>
            <div class="col-md-2">
                <?php echo $cliente->region;?>
            </div>
        
            <div class="col-md-2">
                Código Postal
            </div>
            <div class="col-md-2">
                <?php echo $cliente->cpostal;?>
            </div>
            <div class="col-md-2">
                País
            </div>
            <div class="col-md-2">
                <?php echo $cliente->pais;?>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                Teléfono
            </div>
            <div class="col-md-4">
                <?php echo $cliente->telefono;?>
            </div>
        
            <div class="col-md-2">
                Fax
            </div>
            <div class="col-md-4">
                <?php echo $cliente->fax;?>
            </div>
        </div>
        
        <?php
        endforeach;
        ?>
        
    </div>
    <div class="container">
        <?php ?>
    </div>
</html>