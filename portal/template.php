<?php $path = "";
/* 
 * Copy this section as a whole
 * ########################################################################################################################################
 */
 //this is to include the header in all scripts that require a header
 
include('includes/header.php');


?>

<div class="clearfix"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<?php //this is to include the sidebar.
include('includes/sidebar.php');
/*
 * #########################################################################################################################################
*/
?>

		<!-- BEGIN CONTENT -->
		<!-- ############################################################################################################################### 
			-->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					
					<!-- BEGIN PAGE TITLE BLOCK-->
					<h3 class="page-title">
						<!-- Title of the page below-->
					Template Page 
						<!-- End Title of the page below-->

					<!-- Description of page below if required or necessary -->
					<small>use this page to get all page elements needed</small>
					<!-- End of page below if required or necessary -->

					</h3>
					<!-- END TITLE BLOCK -->
					
					<!-- BEGIN BREADCRUMB BLOCK-->
					<!-- Edit in between only to alter the breadcrumb-->
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.php">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="layout_blank_page.html#">Template Page</a>
						</li>
					</ul>
					<!-- END BREADCRUMB BLOCK-->

					<!-- END PAGE TITLE & BREADCRUMB-->
					
				</div>
			</div>
			<!-- END PAGE HEADER-->
	<!-- #####################################	Start Page content here ##################################### -->
			
			<!-- BEGIN PAGE CONTENT-->
			<!-- Copy and paste this for another block.
				Content can go in between-->
			<div class="row">
				<div class="col-md-12"> <!-- Reduce the number to reduce the width of the div from 1 - 12 -->
					 Page content goes here <br> Only work between this lines
					 
	<!-- ************************************	Start second level block ***************************************** -->

					 <div class="portlet box blue-chambray ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Horizontal Form
							</div>
						</div>
						
						<div class="portlet-body form">
							
					<!-- #####################################	Start form here ##################################### -->
							
							<form class="form-horizontal" role="form">
								<div class="form-body">
									
					<!-- #####################################	Copy Input ##################################### -->

									<div class="form-group">
										<label class="col-md-3 control-label">Email Address</label>
										<div class="col-md-9">
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
												</span>
												<input type="email" class="form-control" placeholder="Email Address">
											</div>
										</div>
									</div>
				<!-- #####################################	End Copy here ##################################### -->
				
					<!-- #####################################	Copy passsword input ##################################### -->

									<div class="form-group">
										<label class="col-md-3 control-label">Password</label>
										<div class="col-md-9">
											<div class="input-group">
												<input type="password" class="form-control" placeholder="Password">
												<span class="input-group-addon">
												<i class="fa fa-user"></i>
												</span>
											</div>
										</div>
									</div>
					<!-- #####################################	End Copy here ##################################### -->

					<!-- #####################################	Copy select dropdown ##################################### -->
									
									<div class="form-group">
										<label class="col-md-3 control-label">Dropdown</label>
										<div class="col-md-9">
											<select class="form-control">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
										</div>
									</div>
					<!-- #####################################	End Copy here ##################################### -->

					<!-- #####################################	Copy textarea ##################################### -->
									
									<div class="form-group">
										<label class="col-md-3 control-label">Textarea</label>
										<div class="col-md-9">
											<textarea class="form-control" rows="3"></textarea>
										</div>
									</div>
					<!-- #####################################	Copy file input for upload ##################################### -->
							
									<div class="form-group">
										<label for="exampleInputFile" class="col-md-3 control-label">File input</label>
										<div class="col-md-9">
											<input type="file" id="exampleInputFile">
											<p class="help-block">
												 some help text here.
											</p>
										</div>
									</div>
					<!-- #####################################	End Copy here ##################################### -->
					
					<!-- #####################################	Copy checkboxes ##################################### -->
									
									<div class="form-group">
										<label class="col-md-3 control-label">Checkboxes</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label>
												<input type="checkbox"> Checkbox 1 </label>
												<label>
												<input type="checkbox"> Checkbox 1 </label>
												<label>
												<input type="checkbox" disabled> Disabled </label>
											</div>
										</div>
									</div>
					<!-- #####################################	End Copy here ##################################### -->

					<!-- #####################################	Copy inline checboxes ##################################### -->
									
									<div class="form-group">
										<label class="col-md-3 control-label">Inline Checkboxes</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox21" value="option1"> Checkbox 1 </label>
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox22" value="option2"> Checkbox 2 </label>
												<label class="checkbox-inline">
												<input type="checkbox" id="inlineCheckbox23" value="option3" disabled> Disabled </label>
											</div>
										</div>
									</div>
					<!-- #####################################	End Copy here ##################################### -->

					<!-- #####################################	Copy Radio buttons ##################################### -->
									
									<div class="form-group">
										<label class="col-md-3 control-label">Radio</label>
										<div class="col-md-9">
											<div class="radio-list">
												<label>
												<input type="radio" name="optionsRadios" id="optionsRadios22" value="option1" checked> Option 1 </label>
												<label>
												<input type="radio" name="optionsRadios" id="optionsRadios23" value="option2" checked> Option 2 </label>
												<label>
												<input type="radio" name="optionsRadios" id="optionsRadios24" value="option2" disabled> Disabled </label>
											</div>
										</div>
									</div>
					<!-- #####################################	End Copy here ##################################### -->
									
					<!-- #####################################	Copy inline radios ##################################### -->

									<div class="form-group">
										<label class="col-md-3 control-label">Inline Radio</label>
										<div class="col-md-9">
											<div class="radio-list">
												<label class="radio-inline">
												<input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" checked> Option 1 </label>
												<label class="radio-inline">
												<input type="radio" name="optionsRadios" id="optionsRadios26" value="option2" checked> Option 2 </label>
												<label class="radio-inline">
												<input type="radio" name="optionsRadios" id="optionsRadios27" value="option3" disabled> Disabled </label>
											</div>
										</div>
									</div>
								</div>
					<!-- #####################################	End Copy here ##################################### -->

					<!-- #####################################	Copy Action buttons here ##################################### -->
								
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn blue-chambray">Submit</button>
										<button type="button" class="btn default">Cancel</button>
									</div>
								</div>

					<!-- #####################################	End Copy here ##################################### -->
								
							</form>

					<!-- #####################################	End Form ##################################### -->
							
						</div>
					</div
					
				</div>
				
					<!-- ************************************	End second level block ***************************************** -->
					
					
					<!-- ****************************	Begin another second level block for table ******************************** -->
					
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<!-- Copy from here for table-->
					<div class="portlet box blue-chambray">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Show/Hide Columns
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="table_advanced.html#" data-toggle="dropdown">
									Columns <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><input type="checkbox" checked data-column="1">Matric No</label>
										<label><input type="checkbox" checked data-column="2">Students Name</label>
										<label><input type="checkbox" checked data-column="3">Department</label>
										<label><input type="checkbox" checked data-column="4">Course</label>
										<label><input type="checkbox" checked data-column="5">Level</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_4">
							<thead>
							<tr>
								<th>
									 Matric No
								</th>
								<th>
									 Student Name
								</th>
								<th class="hidden-xs">
									 Department
								</th>
								<th class="hidden-xs">
									 Course
								</th>
								<th class="hidden-xs">
									 Level
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 1.3
								</td>
								<td>
									 OSX.3
								</td>
								<td>
									 312.8
								</td>
								<td>
									 A
								</td>
							</tr>
							<tr>
								<td>
									 Webkit
								</td>
								<td>
									 Safari 2.0
								</td>
								<td>
									 OSX.4+
								</td>
								<td>
									 419.3
								</td>
								<td>
									 A
								</td>
							</tr>
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- End Copy from here for table-->
					<!-- END EXAMPLE TABLE PORTLET-->
					

			</div>
			<!-- End Copy and paste this for another block-->
			
			
	<!-- #####################################	Start Page content here ##################################### -->
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
<?php
/*
 * #########################################################################################################################################
*/
 //this is to include the right sidebar in all scripts that require a right sidebar

include('includes/rightsidebar.php');

 //this is to include the footer in all scripts that require a footer

include('includes/footer.php');
/*
 * #########################################################################################################################################
*/
?>