<?php echo validation_errors(); ?>

<?php echo form_open('cliente/add'); ?>
   <?php echo form_label('Nombre: ', 'nombreCli'); ?>
   <?php echo form_input('nombreCli'); ?><br>
   <?php echo form_label('Codigo: ', 'codCliente'); ?>
   <?php echo form_input('codCliente'); ?><br>
   <?php echo form_label('Direccion: ', 'direccion'); ?>
   <?php echo form_input('direccion'); ?><br>
   <?php echo form_label('Ciudad: ', 'ciudad'); ?>
   <?php echo form_input('ciudad'); ?><br>
   <?php echo form_label('CP: ', 'cpostal'); ?>
   <?php echo form_input('cpostal'); ?><br>
   <?php echo form_label('PAÍS (Código): ', 'idPais'); ?>
   <?php echo form_input('idPais'); ?><br>
   <?php echo form_label('Teléfono: ', 'telefono'); ?>
   <?php echo form_input('telefono'); ?><br>
   <?php echo form_label('Fax: ', 'fax'); ?>
   <?php echo form_input('fax'); ?><br>
   <?php echo form_submit(); ?>
<?php echo form_close(); ?>