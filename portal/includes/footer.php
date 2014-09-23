</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 <?php echo date('Y'); ?> &copy; Powered by Lynqx.
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo $plugin; ?>respond.min.js"></script>
<script src="<?php echo $plugin; ?>excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo $plugin; ?>jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $plugin; ?>jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $plugin; ?>bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo $plugin; ?>select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin; ?>datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin; ?>datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin; ?>datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin; ?>datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin; ?>datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $assets; ?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $assets; ?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $assets; ?>admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?php echo $assets; ?>admin/pages/scripts/table-advanced.js"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $global; ?>plugins/jquery-notific8/jquery.notific8.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php echo $assets; ?>admin/pages/scripts/ui-notific8.js"></script>


<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init() // init quick sidebar
   TableAdvanced.init();
      Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Index.initIntro();
   Tasks.initDashboardWidget();
      UINotific8.init();

});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'keenthemes.com');
  ga('send', 'pageview');
</script>
</body>

<!-- END BODY -->
</html>