        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy;2022 <a href="https://hospital.uncuyo.edu.ar/">HU TICS</a>.</strong> 
        </footer>
    </div>
    <!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/lightbox/dist/js/lightbox-plis-jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
  $('#example1').DataTable({
             "language": {
                 "lengthMenu": "Mostrar _MENU_ registros por pagina",
                 "zeroRecords": "No se encontraron resultados en su busqueda",
                 "searchPlaceholder": "Buscar registros",
                 "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                 "infoEmpty": "No existen registros",
                 "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                 "search": "Buscar:",
                 "paginate": {
                     "first": "Primero",
                     "last": "Último",
                     "next": "Siguiente",
                     "previous": "Anterior"
                 },
             }
        });
 })

</script>
</body>
</html>


