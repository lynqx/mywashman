<?php // include the header file
   $page_title = 'Account Created';
   include('includes/header.php');
?>
<script src="_jscripts/subscribe.js"></script>

    <div class="main">
      <div class="container">
        
          <!-- BEGIN CONTENT -->
          <div class="col-md-11 col-sm-11">
            <h1>Thank you for your patronage</h1>
            <div id="error" style="background:red; color:white; display:none">
            <span class="require" style="color:white;">Error: </span>
            <small id="error-message" style="font-size:11px; color:white;">
            </small>
            </div>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-info">
                    <h2><em>Login</em> to your Account</h2>
                    <p>You can now enjoy our luxurios services. Please login to your dashboard by clicking the button below.</p>

                    <!-- <p>Please read our FAQ page for more details on our services</p> -->
                    <a href="login.php" class="btn btn-default" style="min-width:200px;">Login</a>
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