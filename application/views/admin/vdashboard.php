<div class="content-wrapper">   
    <section class="content-header">
    <h1>Cardiología<small>Servicio Entrega Informes</small></h1>
    </section>        
    <section class="content">
            <div class="info-box">        
                <span class="info-box-icon bg-green"><i class="fa fa-envelope-circle-check"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Informes enviados por Mail</span>
                        <span class="info-box-number"><?php echo $resultado['enviados'];?></span>
                    </div>
            </div>            
            <div class="info-box">                    
                <span class="info-box-icon bg-blue"><i class="fa fa-hand-holding-medical"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Informes entregados en persona</span>
                        <span class="info-box-number"><?php echo $resultado['entregados'];?></span>                        
                    </div>
            </div>            
            <div class="info-box">                   
                <span class="info-box-icon bg-red"><i class="fa fa-triangle-exclamation"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Informes NO entregados</span>
                        <span class="info-box-number"><?php echo $resultado['noenviados'];?></span>
                    </div>
            </div>
    </section>    
</div>


