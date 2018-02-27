<footer class="main-footer">   
    <strong>Copyright &copy; 2018 <a href="#">Gov. of Mizoram</a>.</strong> All rights
    reserved.
</footer>
<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Custom -->
<script src="js/custom.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="js/raphael.min.js"></script>
<script src="js/morris.min.js"></script>
<!-- Sparkline -->
<script src="js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="js/jquery.knob.min.js"></script>
<!-- date-range-picker -->
<script src="js/moment.min.js"></script>
<!-- bootstrap datepicker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<!-- Bootstrap WYSIHTML5 -->
<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- ChartJS -->
<script src="js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/dashboard2.js"></script>
<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
 <!--Form Validation-->             
<script src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrapValidator.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
    $(document).ready(function () {
        $('.defaultForm').bootstrapValidator();
        $(".user_details").click(function ()
        {
            $(".user_list").toggle();
            $(".dash .thumbnail").css("height", "auto");
        });
        $(".buyers_details").click(function ()
        {
            $(".buyers_list").toggle();
            $(".dash .thumbnail").css("height", "auto");
        });
        $(".mechanic_details").click(function ()
        {
            $(".mechanic_list").toggle();
            $(".dash .thumbnail").css("height", "auto");
        });
        $(".payement_details").click(function ()
        {
            $(".payment_list").toggle();
            $(".dash .thumbnail").css("height", "auto");
        });
        $(".vehicle_details").click(function ()
        {
            $(".vehicle_list").toggle();
            $(".dash .thumbnail").css("height", "auto");
        });
    });
</script>
</body>
</html>
