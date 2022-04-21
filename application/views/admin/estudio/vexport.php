<div class="content-wrapper">
    <section class="content-header">
        <h1>Estudios Cardiológicos</h1>
    </section>            
    <section class="content">                
        <div class="box box-solid">
            <div class="box-body">                
                <?php if($this->session->flashdata('correcto')):?>
                    <div class="alert alert-success">
                        <p><?php echo $this->session->flashdata('correcto')?></p>
                    </div>
                <?php endif;?>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>                                    
                                    <th>Estudio</th>
                                    <th>DNI Paciente</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Archivo</th>
                                    <th>Usuario Alta</th>
                                    <th>Fecha Estudio</th>
                                    <th>Fecha Carga</th>
                                    <th>Estado</th>
                                    <th>Fecha Envío</th>
                                    <th>Usuario Envio</th>                                   
                                    <th class="text-center" >Modificar</th>
                                    <th class="text-center" >Enviar</th>
                                    <th class="text-center" >Entrega Personal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($estudio)):?>
                                    <?php foreach ($estudio as $atributos):?>                                    
                                        <tr>
                                            <td><?php echo $atributos->id_estudio;?></td>
                                            <td><?php echo $atributos->tipo_estudio;?></td>
                                            <td><?php echo $atributos->dni_paciente;?></td>
                                            <td><?php echo $atributos->nombre_paciente;?></td>
                                            <td><?php echo $atributos->apellido_paciente;?></td>
                                            <td><?php echo $atributos->email;?></td>
                                            <td>
                                                <div class="btn-group>">                          
                                                    <a href="<?php echo base_url();?>./uploads/files/<?php echo $atributos->archivo;?>" target="_blank" class="btn btn-success">
                                                        <span class="fa fa-file-pdf "></span></a>                                                        
                                                </div>                        
                                            </td>
                                            <td><?php echo $atributos->idusuario_subido;?></td>
                                            <td><?php echo $atributos->fecha_estudio;?></td>
                                            <td><?php echo $atributos->fecha_subida;?></td>
                                            <?php if ($atributos->estado_envio==1){
                                                $style='class="label label-success"';
                                                echo "<td><p><span $style><font style= 'vertical-align: inherit;'>Mail enviado</font></span></p>";
                                            }else if($atributos->estado_envio==2){
                                                $style='class="label label-success"';
                                                echo "<td><p><span $style><font style= 'vertical-align: inherit;'>Entrega en persona</font></span></p>";
                                            }else{
                                                $style='class="label label-danger"';
                                                echo "<td><p><span $style><font style= 'vertical-align: inherit;'>Sin enviar</font></span></p>";
                                            }?>                                            
                                            <td><?php echo $atributos->fecha_envio;?></td>
                                            <td><?php if (!empty($atributos->idusuario_envio)){echo $atributos->idusuario_envio;}else{echo "";}?></td>

                                            <?php $data = $atributos->id_estudio."*".$atributos->tipo_estudio."*".$atributos->dni_paciente."*".$atributos->fecha_subida; ?>
                                            <td class="text-center" >
                                                <div class="btn-group>">                                            
                                                    <a href="<?php echo base_url();?>mantenimiento/cestudio/cedit/<?php echo $atributos->id_estudio;?>" class="btn btn-warning">
                                                    <span class="fa fa-pencil"></span></a>
                                            </td> 
                                            <td class="text-center" >                                           
                                                <div class="btn-group>">
                                                    <?php if (str_contains($atributos->email, 'sin@correo')){?>                                                       
                                                            <a href="" class="btn btn-danger"><span class="fa-solid fa-triangle-exclamation"></span></a>
                                                    <?php }else{?>
                                                            <a href='<?php echo base_url();?>mantenimiento/cestudio/enviarMail/<?php echo $atributos->id_estudio;?>' class='btn btn-success'><span class='fa fa-paper-plane'></span></a>
                                                    <?php }?>                                                                                                         
                                                </div>
                                            </td>
                                            <td class="text-center" >
                                                <div class="btn-group>">                                            
                                                    <a href="<?php echo base_url();?>mantenimiento/cestudio/entregaEstudio/<?php echo $atributos->id_estudio;?>" class="btn btn-info">
                                                    <span class="fa-solid fa-user-check"></span></a>
                                            </td>
                                        </tr>                                 
                                    <?php endforeach ?>
                                <?php endif; ?>                              
                            </tbody>
                        </table>
                        <div align="center">
                            <form method="post" action="<?php echo base_url(); ?>mantenimiento/excel_export/export">
                                <input type="hidden" name="txtfecha_desde" value="<?php echo $fecha_desde?>"/>
                                <input type="hidden" name="txtfecha_hasta" value="<?php echo $fecha_hasta?>"/>
                                <input type="submit" name="export" class="btn btn-success" value="Guardar reporte" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>                   
    </section>
</div>