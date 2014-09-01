<?php // include the header file
   $page_title = 'Subscription';
   include('includes/header.php');
?>
<script src="_jscripts/subscribe.js"></script>

    <div class="main">
      <div class="container">
        
          <!-- BEGIN CONTENT -->
          <div class="col-md-11 col-sm-11">
            <h1>Subscribe to a Laundry Package</h1>
            <div id="error" style="background:red; color:white; display:none">
            <span class="require" style="color:white;">Error: </span>
            <small id="error-message" style="font-size:11px; color:white;">
            </small>
            </div>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal" role="form">
                    <fieldset>
                      <legend>Your personal details</legend>
                      <div class="form-group">
                        <label for="firstname" class="col-lg-4 control-label"> Username <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-lg-4 control-label"> Mobile <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="tel" class="form-control" id="mobile" name="mobile" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset>
                      <legend>Your package (per month)<br>
					  <small style="font-size:11px; color:green;">
					  Select any package that suites your laundry needs
					  </small></legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Subscription Package <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <select class="form-control" id="package" name="package" required>
						  <option value=""> (Select a package) </option>
						  <option value="1"> Silver (&#8358; 3,500) </option>
						  <option value="2"> Gold (&#8358; 5,000) </option>
						  <option value="3"> Premium (&#8358; 10,000) </option>
						  </select>
                        </div>
                      </div>
					</fieldset>
					
					<fieldset>
                      <legend>Your password <br>
					  <small style="font-size:11px; color:green;">
					  Password will be used to log into your account to schedule pickup and track your laundry
					  </small></legend>
                      <div class="form-group">
                        <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="confirm-password" class="col-lg-4 control-label">Confirm password <span class="require">*</span></label>
                        <div class="col-lg-8">
                          <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
                        </div>
                      </div>
                    </fieldset>
                    
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
					<small style="font-size:11px; color:#f00;">
					  By clicking the subscribe button, you agree to our <a href="terms.php">terms and conditions</a>
					</small>
					</div>
					</div>
					
					<div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
										  
                        <button type="button" id="subscribeBtn" class="btn btn-primary">Subscribe</button>
                        <button type="button" class="btn btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    <h2><em>Important</em> Information</h2>
                    <p>A little info about the different packages</p>

                    <p>Please read our FAQ page for more details on our services</p>

                    <a href="tems.php" class="btn btn-default">Terms of Service</a>
                    <a href="faq.php" class="btn btn-default">FAQ</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

   <?php include('includes/footer.php'); ?>