<?php
$date = date('d-m-Y');
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=reporte_cardio_$date.xls");
?>

<html>
<head>
    <title>Reporte Cardiología HU</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container box">        
            <div class="table-responsive">                
                <table class="table table-bordered" border='1' text-align="center">
                    <tr>
                            <th>ID </th>
                            <th>Estudio</th>
                            <th>DNI Paciente</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Medico</th>
                            <th>Fecha Estudio</th>
                            <th>Fecha Carga</th>
                            <th>Estado Env/Entrega</th>
                            <th>Usuario Env/Entrega</th> 
                            <th>Fecha Env/Entrega</th>                                                                  
                        </tr>
                    <?php foreach($estudio as $row){
                        if($row->estado_envio=="0"){
                        echo '
                            <tr>
                                <td>'.$row->id_estudio.'</td>
                                <td>'.$row->tipo_estudio.'</td>
                                <td>'.$row->dni_paciente.'</td>
                                <td>'.$row->nombre_paciente.'</td>
                                <td>'.$row->apellido_paciente.'</td>
                                <td>'.$row->idusuario_subido.'</td>
                                <td>'.$row->fecha_estudio.'</td>
                                <td>'.$row->fecha_subida.'</td>
                                <td>Sin enviar</td>
                                <td>'.$row->idusuario_envio.'</td>
                                <td>'.$row->fecha_envio.'</td>                                
                            </tr>';
                        }elseif($row->estado_envio=="1"){
                            echo '
                            <tr>
                                <td>'.$row->id_estudio.'</td>
                                <td>'.$row->tipo_estudio.'</td>
                                <td>'.$row->dni_paciente.'</td>
                                <td>'.$row->nombre_paciente.'</td>
                                <td>'.$row->apellido_paciente.'</td>
                                <td>'.$row->idusuario_subido.'</td>
                                <td>'.$row->fecha_estudio.'</td>
                                <td>'.$row->fecha_subida.'</td>
                                <td>Enviado</td>
                                <td>'.$row->idusuario_envio.'</td>
                                <td>'.$row->fecha_envio.'</td>                                
                            </tr>';
                        }else{
                            echo '
                            <tr>
                                <td>'.$row->id_estudio.'</td>
                                <td>'.$row->tipo_estudio.'</td>
                                <td>'.$row->dni_paciente.'</td>
                                <td>'.$row->nombre_paciente.'</td>
                                <td>'.$row->apellido_paciente.'</td>
                                <td>'.$row->idusuario_subido.'</td>
                                <td>'.$row->fecha_estudio.'</td>
                                <td>'.$row->fecha_subida.'</td>
                                <td>Entregado</td>
                                <td>'.$row->idusuario_envio.'</td>
                                <td>'.$row->fecha_envio.'</td>                                
                            </tr>';
                        }                        
                    }?>
                </table>                
            </div>
    </div>
</body>
</html>