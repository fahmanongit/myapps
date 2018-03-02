		<!-- footer content -->
		<footer>
			<div class="pull-right">
				Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
			</div>
			<div class="clearfix"></div>
		</footer>
		<!-- /footer content -->
		</div>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    	 <!-- validator -->
    	<script src="<?php echo base_url(); ?>assets/vendors/validator/validator.js"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
		 <!-- jQuery Smart Wizard -->
    	<script src="<?php echo base_url(); ?>assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<!-- Chart.js -->
		<script src="<?php echo base_url(); ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
		<!-- gauge.js -->
		<script src="<?php echo base_url(); ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
		<!-- bootstrap-progressbar -->
		<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<!-- iCheck -->
		<script src="<?php echo base_url(); ?>assets/vendors/iCheck/icheck.min.js"></script>
		<!-- Skycons -->
		<script src="<?php echo base_url(); ?>assets/vendors/skycons/skycons.js"></script>
		<!-- jQuery Sparklines -->
    	<script src="<?php echo base_url(); ?>assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    	 <!-- morris.js -->
	    <script src="<?php echo base_url(); ?>assets/vendors/raphael/raphael.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/vendors/morris.js/morris.min.js"></script>
		<!-- Flot -->
		<script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.time.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
		
		<!-- Flot plugins -->
		<script src="<?php echo base_url(); ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
		<!-- DateJS -->
		<script src="<?php echo base_url(); ?>assets/vendors/DateJS/build/date.js"></script>
		<!-- JQVMap -->
		<script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- bootstrap-wysiwyg -->
	    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	    <script src="<?php echo base_url(); ?>assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
	    <script src="<?php echo base_url(); ?>assets/vendors/google-code-prettify/src/prettify.js"></script>
	    <!-- jQuery Tags Input -->
	    <script src="<?php echo base_url(); ?>assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	    <!-- Switchery -->
	    <script src="<?php echo base_url(); ?>assets/vendors/switchery/dist/switchery.min.js"></script>
	    <!-- Select2 -->
	    <script src="<?php echo base_url(); ?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
	    <!-- Parsley -->
	    <script src="<?php echo base_url(); ?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>
	    <!-- Autosize -->
	    <script src="<?php echo base_url(); ?>assets/vendors/autosize/dist/autosize.min.js"></script>
	    <!-- jQuery autocomplete -->
	    <script src="<?php echo base_url(); ?>assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	    <!-- jquery.inputmask -->
    	<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
	    <!-- starrr -->
	    <script src="<?php echo base_url(); ?>assets/vendors/starrr/dist/starrr.js"></script>
	    <!-- jQuery Knob -->
	    <script src="<?php echo base_url(); ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
	    <!-- Cropper -->
	    <script src="<?php echo base_url(); ?>assets/vendors/cropper/dist/cropper.min.js"></script>
	    <!-- Ion.RangeSlider -->
    	<script src="<?php echo base_url(); ?>assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>

		<!-- Initialize datetimepicker -->
		<script>
		    $('#myDatepicker').datetimepicker();
		    
		    $('#myDatepicker2').datetimepicker({
		        format: 'DD.MM.YYYY'
		    });
		    
		    $('#myDatepicker3').datetimepicker({
		        format: 'hh:mm A'
		    });
		    
		    $('#myDatepicker4').datetimepicker({
		        ignoreReadonly: true,
		        allowInputToggle: true
		    });

		    $('#datetimepicker6').datetimepicker();
		    
		    $('#datetimepicker7').datetimepicker({
		        useCurrent: false
		    });
		    
		    $("#datetimepicker6").on("dp.change", function(e) {
		        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
		    });
		    
		    $("#datetimepicker7").on("dp.change", function(e) {
		        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
		    });
		</script>

  	</body>
</html>