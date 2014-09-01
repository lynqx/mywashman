<?php // include the header file
   $page_title = 'Contact Us';
   include('includes/header.php');
   
   # Script 16.6 - register.php
// This is the registration page for the site.
?>

                        <div class="row margin-bottom-40">
						<div class="col-md-9 col-sm-9">
<?php
if (isset($_POST['submitted'])) { // Handle the form.

require_once ('includes/init_connect.php');

// Trim all the incoming data:
$trimmed = array_map('trim', $_POST);

// Assume invalid values:
$n = $mb = $e = $msg = FALSE;


 //Checking if the captch entered is correct  
        if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
            echo "<script>alert('Spam Check Failed');</script>"; 
			 
	} else {  //Place your code for processing the form here  


// Check for a first name:
if (preg_match ('/^[A-Z \'.-]{2,20}$/i', $trimmed['name'])) {
$n = mysqli_real_escape_string ($conn, $trimmed['name']);
} else {
echo '<p class="error">Please enter your name!</p>';
}


//check for a mobile no
if ( (isset($_POST['mobile'])) && (is_numeric($_POST['mobile'])) ) {
$mb = mysqli_real_escape_string ($conn, $trimmed['mobile']);
} else {
echo '<p class="error">Please enter a valid mobile number.</p>';
}

// Check for an email address:
if (preg_match ('/^[\w.-]+@[\w.-]+\.[AZa-z]{2,6}$/', $trimmed['email'])) {
$e = mysqli_real_escape_string ($conn, $trimmed['email']);
} else {
echo '<p class="error">Please enter a valid email address!</p>';
}

// Check for a message:
$msg = mysqli_real_escape_string ($conn, $trimmed['message']);

if ($n && $mb && $e && $msg) { // If everything's OK...

// Add the user to the database:
$q = "INSERT INTO contact (name, mobile, email, message, date) VALUES ('$n', '$mb', '$e', '$msg', NOW() )";
$r = mysqli_query ($conn, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

if (mysqli_affected_rows($conn) == 1)
{ // If it ran OK.

//send the email
$staff = 'paakintayo@yahoo.com';
		$to = $staff;
		$from = "MyWashman.com";
		$subject="Message from a user of the My Washman website";
		$body = "The user whose information is stated below has just sent a message to the organization via the website @ www.mywashman.com\n\n".
		"Find the information below\n\n".
		"Name: $n\n".
		"Email: $e\n".
		"Mobile: $mb\n".
		"Message: $msg \n";
				
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $e \r\n";
		
mail($to, $subject, $body, $headers);		
// mail($to, 'Registration Confirmation', $body, 'From: MY WASHMAN');

 // Finish the page:
echo '<h2>Thank You!</h2>';
//echo $to;
echo '<p>Your message has been received.</p> <p> A support officer will respond to your message soon </p>';


// Include the HTML footer.
 // Stop the page.

} else { // If it did not run OK.
echo '<p class="error">You message could not be sent due to a system error. We apologize for any inconvenience.</p>';
}


} else { // If one of the data tests failed.
echo '<p class="error">You cannot send an empty message, Please try again.</p>';
}



}

}

   ?>
   </div>

    <div class="main">
      <div class="container">
	  <div class="row margin-bottom-40"> </div>
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">
            <h1>Contacts</h1>
            <div class="content-page">
              <div class="row">
                
                <div class="col-md-9 col-sm-9">
                  <p>Fill the form below to contact our support desk or to subscribe to any of our packages.
				  <br> We will respond to you within 24 hours</p>
                  
                  <!-- BEGIN FORM-->
                  <form action="contact.php" role="form" method="post" name="form1" id="form1" onSubmit = "return validateForm1()">
                    <div class="form-group">
                      <label for="contacts-name">Name</label>
                      <input type="text" class="form-control" id="contacts-name" name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="contacts-email">Mobile</label>
                      <input type="tel" class="form-control" id="contacts-mobile" name="mobile" required>
                    </div>
					
					<div class="form-group">
                      <label for="contacts-email">Email</label>
                      <input type="email" class="form-control" id="contacts-email" name="email" required>
                    </div>
					
                    <div class="form-group">
                      <label for="contacts-message">Message</label>
                      <textarea class="form-control" rows="5" id="contacts-message" name="message" required></textarea>
                    </div>
					
			<div class="form-group">
			    <img src="mywash_capcha.php?rand=<?php echo rand(); ?>" id='captchaimg' >
                <label>Enter the code here :</label>
                <input id="6_letters_code" name="6_letters_code" type="text">
			    <small>Can't read the image? refresh <a href='javascript: refreshCaptcha();'>here &nbsp; <i class="fa fa-refresh"></i></a></small>
			</div>
					
					<input type="hidden" name="submitted" value="TRUE" />
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Send</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                  </form>
                  <!-- END FORM-->
                </div>

                <div class="col-md-3 col-sm-3 sidebar2">
                  <h2>Our Contacts</h2>
                  <address>
                    <strong>Contact Address</strong><br>
                    No 44, <br>
					Oba Abimbola Street,<br>
                    Felele Layout, Ibadan.<br><br>
					
					<strong>Mobile</strong><br>

                    <abbr title="Phone">P:</abbr> (234) 08063777394 <br>
                    <abbr title="Phone">P:</abbr> (234) 08066779221
                  </address>
                  <address>
                    <strong>Email</strong><br>
                    <a href="mailto:info@email.com">info@email.com</a><br>
                    <a href="mailto:support@example.com">support@example.com</a>
                  </address>
                  <ul class="social-icons margin-bottom-40">
                    <li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                    <li><a href="#" data-original-title="github" class="github"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                    <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                    <li><a href="#" data-original-title="rss" class="rss"></a></li>
                  </ul>

                  <h2 class="padding-top-30">About Us</h2>
                  <p>We make the process of laundry hassles free, affordable and convinient.</p>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> Laundry</li>
                    <li><i class="fa fa-check"></i> Dry Cleaning  </li>
                    <li><i class="fa fa-check"></i> Ironing</li>
                    <li><i class="fa fa-check"></i> Pickup and Delivery</li>
                  </ul>        
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>

   <?php include('includes/footer.php'); ?>
   
    <script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

   <script type="text/javascript">
function validateForm1()
	{
  		  var f=document.forms["form1"]["name"].value;
		if (f==null || f=="")
		  {
		  alert("Please enter your name");
		  return false;
		  }
		  
		  var m=document.forms["form1"]["mobile"].value;
		if (m==null || m=="")
		  {
		  alert("Please enter your mobile number");
		  return false;
		  }
		
		if (m.length<11 || m.length>13 ) 
	 	{
		  alert("Not a valid mobile number");
		  return false;
		 }
		 
		 
		var x=document.forms["form1"]["email"].value;
		if (x==null || x=="")
		  {
		  alert("Please enter your Email Address");
		  return false;
		  }
		  
		var x=document.forms["form1"]["email"].value;
		var atpos=x.indexOf("@");
		var dotpos=x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
		  {
		  alert("Not a valid Email address");
		  return false;
		  }
		  
		  var y=document.forms["form1"]["6_letters_code"].value;
		if (y==null || y=="")
		  {
		  alert("Please enter the code in the image");
		  return false;
		  }
		  
	}

</script>