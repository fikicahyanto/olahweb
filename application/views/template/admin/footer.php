		
		<div id="modal_hapus" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="display: none;">
			<div class="modal-body">
				<p style="center">
					Yakin akan dihapus?
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default">
					Batal
				</button>
				<button id="btn_delete" type="button" data-dismiss="modal" onclick="return true" class="btn btn-primary">
					OK
				</button>
			</div>
		</div>
		<!-- start: FOOTER -->
    	<div class="footer clearfix">
			<div class="footer-inner">
				2014 &copy; clip-one by cliptheme.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/admin/plugins/respond.min.js"></script>
		<script src="assets/admin/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="<?=base_url("assets/admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap/js/bootstrap.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/blockUI/jquery.blockUI.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/iCheck/jquery.icheck.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/perfect-scrollbar/src/jquery.mousewheel.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/perfect-scrollbar/src/perfect-scrollbar.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/less/less-1.5.0.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/jquery-cookie/jquery.cookie.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js")?>"></script>
		<script src="<?=base_url("assets/admin/js/main.js")?>"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?=base_url("assets/admin/plugins/flot/jquery.flot.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/flot/jquery.flot.pie.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/flot/jquery.flot.resize.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/jquery.sparkline/jquery.sparkline.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/fullcalendar/fullcalendar/fullcalendar.js")?>"></script>
		<script src="<?=base_url("assets/admin/js/index.js")?>"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="<?=base_url("assets/admin/plugins/bootstrap-modal/js/bootstrap-modal.js")?>"></script>
		<script src="<?=base_url("assets/admin/plugins/bootstrap-modal/js/bootstrap-modalmanager.js")?>"></script>
		<script src="<?=base_url("assets/admin/js/ui-modals.js")?>"></script>
		<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>

		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
		function loading(type, msg) {
			$('#snackbar2').addClass('show');
			$('#snackbar2').html(msg);
		}
		function loaded(){
  			$('#snackbar2').removeClass('show');
		}
		NProgress.configure({
		showSpinner: true,
		parent: '.br-mainpanel'
		});

		function loader_2()
		{
		return `<div class="col-md-12 col-xl-12 mg-0" style="padding: 70px 0px 70px 0px;">
						<div class="tx-center text-center tx-dark ht-150" style="margin-top:20%;">
						<img style="width:17px;" src="<?= base_url('assets/admin/images/loading.gif'); ?>" alt=""> &nbsp;Processing...
						</div>
				</div>`;
		}
		</script>
	</body>
	<!-- end: BODY -->
</html>