/*

<?php echo validation_errors('<div class="alert alert-danger">',"</div>"); ?>

<?php echo form_open('cliente/add', ['class' => 'form-horizontal']); ?>
<br>
<?php $label_atr = ['class' => 'col-sm-2 control-label']; ?>
    <div class="form-group">
        <?php echo form_label('Nombre: ', 'nombreCli', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'nombreCli', 'class' => 'form-control', 'value' => set_value('nombreCli',$det_cliente[0]->nombreCli)]); ?>
        </div>
    </div>
    <div class="form-group">
    <?php echo form_label('Código: ', 'codCliente',$label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'codCliente',  'class' => 'form-control', 'value' => set_value('codcliente',$det_cliente[0]->codCliente)]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Direccion: ', 'direccion', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'direccion', 'class' => 'form-control', 'value' => set_value('Direccion',$det_cliente[0]->direccion)]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Ciudad: ', 'ciudad', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'ciudad',  'class' => 'form-control', 'value' => set_value('ciudad',$det_cliente[0]->ciudad)]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('CP: ', 'cpostal', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'cpostal', 'class' => 'form-control', 'value' => set_value('cpostal',$det_cliente[0]->cpostal)]); ?>
        </div>    
    </div>
    <div class="form-group">
        <?php echo form_label('PAÍS (Código): ', 'idPais', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'idPais',  'class' => 'form-control', 'value' => set_value('idPais',$det_cliente[0]->idPais)]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('PAÍS (Nombre): ', 'pais', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'pais',  'class' => 'form-control', 'value' => set_value('pais',$det_cliente[0]->pais)]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Teléfono: ', 'telefono', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'telefono',  'class' => 'form-control', 'value' => set_value('telefono',$det_cliente[0]->telefono)]); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo form_label('Fax: ', 'fax', $label_atr); ?>
        <div class="col-md-6">
            <?php echo form_input(['name' => 'fax', 'class' => 'form-control', 'value' => set_value('fax',$det_cliente[0]->fax)]); ?>
        </div>
        <div class = "col-md-2">
            <?php echo form_submit('editar', 'Enviar', ['class'=>'btn btn-primary']); ?>
        </div>
    </div>
<?php echo form_close(); ?>