<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <a href="<?php echo base_url();?>mantenimiento/cestudio/">Estudios Cardiológicos</a>
            <small>Reportes por fecha</small>
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
                        <form action="<?php echo base_url();?>mantenimiento/excel_export/index" method="POST">
                        <label for="nombre">Buscar entre fechas</label>
                            <div class="form-group">
                                <label for="desde">Desde</label>
                                <input type="date" id="txtfecha_desde" name="txtfecha_desde" placeholder="dd-mm-yyyy" class="form-control" value="<?php echo set_value('fecha')?>">
                            </div>
                            <div class="form-group">
                                <label for="hasta">Hasta</label>
                                <input type="date" id="txtfecha_hasta" name="txtfecha_hasta" placeholder="dd-mm-yyyy" class="form-control" value="<?php echo set_value('fecha')?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Generar Reporte</button>
                                <a class="btn btn-success" href="<?php echo base_url();?>mantenimiento/cestudio/">Volver</a>
                            </div>
                        </form>                        
                    </div>                    
                </div>
            </div>
        </div>
    </section>    
</div>





