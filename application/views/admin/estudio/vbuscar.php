<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <a href="<?php echo base_url();?>mantenimiento/cestudio/">Estudios Cardiológicos</a>
            <small>Buscar por documento de paciente</small>
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
                        <form action="<?php echo base_url();?>mantenimiento/cestudio/cbusqueda" method="POST"> 
                            <div class="form-group <?php;?>">
                                <label for="nombre">DNI Paciente</label>
                                <input type="number" id="txtdni_paciente" name="txtdni_paciente" class="form-control" value="<?php ?>" onblur="this.value=this.value.toUpperCase();">
                            </div>                            
                            <div class="form-group <?php;?>">
                                <button type="submit" class="btn btn-danger">Buscar</button>
                                <a class="btn btn-success" href="<?php echo base_url();?>mantenimiento/cestudio/">Volver</a>
                            </div>                           
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>