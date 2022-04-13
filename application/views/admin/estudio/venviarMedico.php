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
                                    <th>Email</th>
                                    <th>Archivo</th>
                                    <th>Usuario Alta</th>
                                    <th>Fecha Estudio</th>
                                    <th>Fecha Carga</th>
                                    <th>Estado</th>
                                    <th>Fecha Envío</th>
                                    <th>Usuario Envio</th>                                   
                                    <th class="text-center" >Modificar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($estudioindex)):?>
                                    <?php foreach ($estudioindex as $atributos):?>                                    
                                        <tr>
                                            <td><?php echo $atributos->id_estudio;?></td>
                                            <td><?php echo $atributos->tipo_estudio;?></td>
                                            <td><?php echo $atributos->dni_paciente;?></td>
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
                                                $style='class="label label-info"';
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
                                        </tr>                                 
                                    <?php endforeach ?>
                                <?php endif; ?>                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>                   
    </section>
</div>       