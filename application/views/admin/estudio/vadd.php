<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <a href="<?php echo base_url();?>mantenimiento/cestudio/">Estudios Cardiológicos</a>
            <small>Nuevo</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($this->session->flashdata('error')):?>
                            <div class="alert alert-danger">
                                <p><?php echo $this->session->flashdata('error')?></p>
                            </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/cestudio/cinsert" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Tipo Estudio</label>
                                <select id="txttipoestudio" name="txttipo_estudio" class="form-control selectpicker">
                                            <option selected>...</option>                                   
                                            <option value="ECG">ECG</option>
                                            <option value="Holter">Holter</option>
                                            <option value="Mapa">MAPA</option>
                                </select>                                
                            </div> 
                            <div class="form-group <?php;?>">
                                <label for="nombre">DNI Paciente</label>
                                <input type="number" id="txtdni_paciente" name="txtdni_paciente" class="form-control" value="<?php echo set_value('dni')?>" 
                                onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="form-group <?php;?>">
                                <label for="nombre">Fecha Estudio</label>
                                <input type="date" id="txtfecha_estudio" name="txtfecha_estudio" class="form-control" value="<?php echo set_value('fecha')?>">
                            </div>                            
                            <div class="form-group <?php;?>">
                                <label for="descripcion">Archivo Adjunto</label>
                                <input type="file" id="txtfile" name="txtfile" class="form-control" value="<?php echo set_value('file')?>" onblur="this.value=this.value.toUpperCase();">
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