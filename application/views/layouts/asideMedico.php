        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">      
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cogs"></i> <span>Informes Cardiológicos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>mantenimiento/cestudio/cadd"><i class="fa fa-circle-o"></i> Subir Estudio</a></li> 
                              
                            <li><a href="<?php echo base_url();?>mantenimiento/cestudio/ctodos"><i class ="fa fa-circle-o"></i> Todos los Estudios </a></li>                                                     
                        </ul>
                    </li>                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-print"></i> <span>Reportes</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>mantenimiento/cestudio/creporte"><i class ="fa fa-circle-o"></i>Reporte Estudios por fecha</a></li>
                        </ul>
                    </li>                    
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
