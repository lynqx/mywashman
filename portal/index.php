<?php 
$path = '';
$page_title= 'Member Area';
include($path . 'includes/header.php');

// check if user is logged in
?>

<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<?php
include($path . 'includes/sidebar.php');
?>

		<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					Member Dashboard <small> Members area to perform basic functions</small>
					</h3>
										
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?php echo $baseurl;?>index.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo $baseurl;?>portal/index.php/">Dashboard</a>
							<i class="fa fa-angle-right"></i>
						</li>
						
						
						<li class="pull-right">
      						<div id="clockspace"></div>
						</li>

					</ul>
					
					
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
						<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-dashboard"></i>
						</div>
						<div class="details">
							<div class="number">
								19
							</div>
							<div class="desc">
								 Total students registered
							</div>
						</div>
						<a class="more">
						Total number of students registered in the current session<i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-bell-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 12
							</div>
							<div class="desc">
								 Last Login
							</div>
						</div>
						<a class="more" href="index.html#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				
			</div>
			<!-- END DASHBOARD STATS -->
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
<?php
include($path . 'includes/footer.php');
?>