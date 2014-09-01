<?php
if (isset($_POST['submitted'])) { // Handle the form.
include('includes/init_connect.php');
include ('includes/sms_fxn.php');

// Trim all the incoming data:
$trimmed = array_map('trim', $_POST);

// Assume invalid values:
$mobile = FALSE;

//check for a mobile no
if ( (isset($_POST['mobile'])) && (is_numeric($_POST['mobile'])) ) {
$mobile = mysqli_real_escape_string ($conn, $trimmed['mobile']);
} else {
echo '<p class="error" style="color:#fff;">Please enter a valid mobile number.</p>';
}

$status = 'active';

if ($mobile) { // If everything's OK...

// check if mobile exists
$q = "SELECT * FROM temp_subscription WHERE mobile ='$mobile' LIMIT 1";
$r = mysqli_query ($conn, $q);
if (mysqli_affected_rows($conn) <1) { // mobile number is new so add to db


// Add the user to the database:
$q2 = "INSERT INTO temp_subscription (mobile, date) VALUES ('$mobile', NOW() )";
$r2 = mysqli_query ($conn, $q2);

if (mysqli_affected_rows($conn) == 1)
{ // If it ran OK then add other details to biodata table.

// Send the email:
$email = 'paakintayo@yahoo.com';
$body = "Somebody has subscribed to My Washman";
$body .= "Below are the details<br /><br />";
$body .= 'Mobile Number - ' . $mobile . '<br /><br />';
$body .= "Please contact the person to validate subscription within 24 hours <br /><br /> Best Regards";

 mail($email,
'Subscription on My Washman', $body,
'From: My Washman');

// Send the message:
$message = "Thank you for subscribing to My Washman. A support officer will call you shortly to validate your subscription. ";
$message .= "Best Regards";


	$phonea=substr($mobile, 0, 1);
	
	if ($phonea=='0'){
		$phon=substr($mobile, 1, 15);
		$phona="234$phon";
	}else{
		$phona=$mobile;
	}
	
$q3 = "SELECT * FROM sms";
$r3 = mysqli_query ($conn, $q3) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($conn));
$a = mysqli_fetch_array($r3, MYSQLI_ASSOC); 
	
	$username=$a['username'];
	$password=$a['password'];
	$sender=$a['sender'];
	$destination=$phona;
	$longSms = 0;

 
//This code block can be customised. 
//The $data array contains data that must be modified as per the API documentation. The array contains data that you will post to the server
$data= array(
"Type"=> "sendparam", 
"Username" => $username,
"Password" => $password,
"senderid" => $sender,
"live" => "true",
"numto" => $destination,
"data1" => $message
) ; //This contains data that you will send to the server.
$data = http_build_query($data); //builds the post string ready for posting
echo do_post_request('http://www.mymobileapi.com/api5/http5.aspx', $data);  //Sends the post, and returns the result from the server.




 // Finish the page:
					 //Set display property and confirmation message of the message container to 'block'
					$success_display = 'block';
					$success_msg = '<h4 style="color: #008080"> SUCCESS! Your subscription is  successful.<br>
					A support officer will contact you within 24 hours to validate your subscription</h4>';
					
					} else { // db error.
						$err_msg = 'Subscription not successful due to a system error. We apologize for any inconvenience</p>';
					}
						} else {
						$err_msg = 'You have previously subscribed to MyWashman, 
						please contact us if you have difficulties remebering your details</p>';
						}
				}

} // End of the main Submit conditional.

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>My Washman &raquo; - Coming Soon</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="assets/admin/pages/css/coming-soon.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12 coming-soon-header">
			<a class="brand" href="index.html">
			<img src="assets/images/logos/logo_home2.png" alt="logo"/>
			</a>
		</div>
	</div>
	<div class="row">
	
	<?php // block to output success message	
											   	if(!empty($success_msg)) {
												echo '<div class="alert alert-block alert-success fade in">
														<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
														<p><h4><i class="fa fa-heart"></i> Successful!</h4>' . $success_msg . '</p></div>';
													}
												?>
												
												<?php // block to output success message	
											   	if(!empty($err_msg)) {
												echo '<div class="alert alert-block alert-danger fade in">
														<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
														<p><h4><i class="fa fa-asterisk"></i> Error!</h4>' . $err_msg . '</p></div>';
													}
												?>
												
												
		<div class="col-md-6 coming-soon-content">
			<h1>Coming Soon!</h1>
			<p>
				 First Online subscription laundry service in Nigeria. <br>We cover your laundry from start to finish. 
				 Subscribe using your phone number and our staff will call you to validate your subscription within 24 hours.
			</p>
			<br>
			<form class="form-inline" action="index.php" method="post">
				<div class="input-group input-large">
					<input type="tel" class="form-control" placeholder="Mobile Number" name="mobile" required>
					<span class="input-group-btn">
					
					<input type="hidden" name="submitted" value="TRUE" />
					<button type="submit" class="btn red">
					<span>Subscribe</span>
					<i class="m-icon-swapright m-icon-white"></i>
					</button>
					</span>
				</div>
			</form>

		</div>
		<div class="col-md-6 coming-soon-countdown">
			<div id="defaultCountdown">
			</div>
		</div>
	</div>
	<!--/end row-->
	<div class="row">
		<div class="col-md-12 coming-soon-footer">
			 <?php echo date('Y'); ?> &copy; MyWashman Laundry.
		</div>
	</div>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script>
$(function () {
	var austDay = new Date();
	austDay = new Date(austDay.getFullYear() + 1, 1 - 4, 01);
	$('#defaultCountdown').countdown({until: austDay});
	$('#year').text(austDay.getFullYear());
});
</script>
<script src="assets/global/plugins/countdown/jquery.countdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/coming-soon.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init() // init quick sidebar
  ComingSoon.init();
});
</script>
<!-- END JAVASCRIPTS -->
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