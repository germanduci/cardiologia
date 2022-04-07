<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <a href="<?php echo base_url();?>mantenimiento/ccolor/">Estudios Cardiológicos</a>
            <small>Actualizar</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($this->session->flashdata('error')):?>
                            <div class="alert alert-danger">
                                <p><?php echo $this->session->flashdata('error')?></p>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url();?>mantenimiento/cestudio/cupdate" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $estudioedit->id_estudio?>" id="txtid_estudio" name="txtid_estudio">
                            <div class="form-group <?php echo !empty(form_error('txttipo_estudio'))? 'has-error': ''?>">
                                <label for="estado">Estudio</label>
                                <select name="txttipo_estudio" id="txttipo_estudio" class="form-control selectpicker">
                                    <option value="ECG"<?php if ($estudioedit->tipo_estudio=='ECG') echo 'selected';?>>ECG</option>
                                    <option value="Holter"<?php if ($estudioedit->tipo_estudio=='Holter') echo 'selected';?>>Holter</option>
                                    <option value="MAPA"<?php if ($estudioedit->tipo_estudio=='MAPA') echo 'selected';?>>MAPA</option>
                                </select>
                            </div>
                            <div class="form-group <?php echo !empty(form_error('txtdni_paciente'))? 'has-error': ''?>">
                                <label for="codigo">Dni Paciente</label>
                                <input type="text" id="txt_dnipaciente" name="txtdni_paciente" class="form-control" value="<?php echo !empty(form_error('txtcodigo'))?
                                set_value('txtcodigo'):$estudioedit->dni_paciente ?>"
                                onblur="this.value=this.value.toUpperCase();">
                                <?php echo form_error('txtcodigo','<span class="help-block">','</span>')?>
                            </div> 
                            <div class="form-group <?php echo !empty(form_error('txtdni_paciente'))? 'has-error': ''?>">
                                <label for="codigo">Email</label>
                                <input type="email" id="txtmail" name="txtmail" class="form-control" value="<?php echo !empty(form_error('txtcodigo'))?
                                set_value('txtmail'):$estudioedit->email ?>">
                                <?php echo form_error('txtcodigo','<span class="help-block">','</span>')?>
                            </div> 
                            <div class="form-group">
                                <label for="descripcion">Fecha Estudio</label>
                                <input type="date" id="txtfecha_estudio" name="txtfecha_estudio" class="form-control" value="<?php echo $estudioedit->fecha_estudio?>"
                                onblur="this.value=this.value.toUpperCase();">
                            </div>                            
                            <div class="form-group <?php echo !empty(form_error('txtfile'))? 'has-error': ''?>">
                                <label for="file">Archivo</label>
                                <input type="file" id="txtfile" name="txtfile" class="form-control" placeholder="<?php echo $estudioedit->archivo?>" value="<?php echo $estudioedit->archivo?>">                                 
                                <p><small><?php echo $estudioedit->archivo?></small></p>
                            </div>                                                      
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Guardar</button>
                                <a class="btn btn-success" href="<?php echo base_url();?>mantenimiento/cestudio/">Volver</a>
                            </div>                                                       
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>