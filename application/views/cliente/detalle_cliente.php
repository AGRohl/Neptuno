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
            <div class="col-md-2 text-center ">
                <strong> Código Cliente</strong>
            </div>
            
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->codCliente;?>
            </div>
        </div>
        <div class="row">
        
            <div class="col-md-2 text-center">
                <strong>Nombre</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->nombreCli;?>
            </div>
        </div>
         <div class="row bg-success">
            <div class="col-md-2 text-center">
                <strong>Direccion</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->direccion;?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                <strong>Ciudad</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->ciudad;?>
            </div>
            
        </div>
        <div class="row bg-success">
            <div class="col-md-2 text-center">
                <strong>Región</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->region;?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                <strong>Código Postal</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->cpostal;?>
            </div>
        </div>
        <div class="row bg-success">
            <div class="col-md-2 text-center">
                <strong>País</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->pais;?>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
                <strong>Teléfono</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->telefono;?>
            </div>
        </div>
        <div class="row bg-success">
            <div class="col-md-2 text-center">
                <strong>Fax</strong>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center">
                <?php echo $cliente->fax;?>
            </div>
        </div>
        
        <?php
        endforeach;
        ?>
        
    </div>
    <div class="container">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-10">
                <a href="<?php echo site_url('cliente/edit/').$cliente->idCliente;?>" class="btn btn-primary" role="button">edita</a>
                <!--<button type="button" class="btn btn-primary" href="" >edita</button>-->
            </div>
        </div>
        <?php ?>
    </div>
</html>