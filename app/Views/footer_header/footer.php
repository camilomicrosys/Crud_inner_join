
<?php
$ruta = base_url() . '/public/plantillaAdmin/';
//esta es la ruta base para los javascript sean eventos o Ajax
$rutaJs = base_url() . '/public/configuraciones/';
?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 Liquicobros</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo $ruta . 'dashboard/plugins/jquery/jquery.min.js' ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $ruta . 'dashboard/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $ruta . 'dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- ChartJS -->
<script src="<?php echo $ruta . 'dashboard/plugins/chart.js/Chart.min.js' ?>"></script>
<!-- Sparkline -->
<script src="<?php echo $ruta . 'dashboard/plugins/sparklines/sparkline.js' ?>"></script>
<!-- JQVMap -->
<script src="<?php echo $ruta . 'dashboard/plugins/jqvmap/jquery.vmap.min.js' ?>"></script>
<script src="<?php echo $ruta . 'dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js' ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $ruta . 'dashboard/plugins/jquery-knob/jquery.knob.min.js' ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo $ruta . 'dashboard/plugins/moment/moment.min.js' ?>"></script>
<script src="<?php echo $ruta . 'dashboard/plugins/daterangepicker/daterangepicker.js' ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $ruta . 'dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ?>"></script>
<!-- Summernote -->
<script src="<?php echo $ruta . 'dashboard/plugins/summernote/summernote-bs4.min.js' ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $ruta . 'dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo $ruta . 'dashboard/dist/js/adminlte.js' ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $ruta . 'dashboard/dist/js/pages/dashboard.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $ruta . 'dashboard/dist/js/demo.js' ?>"></script>
<script type="text/javascript" src="<?php echo $rutaJs . 'eventosjs/eventos.js' ?>" ></script>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap   estos son los sacados de bootsrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

