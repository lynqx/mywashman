
<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->

				<?php 
				/*
				 * *****************************************************
				 * area for business login. Permission for business area is "4"
				 * *****************************************************
				 */
				
				/*if (isset($_SESSION['staffid'])) { //general if statement for all lecturers login
				 
				 
				$admin = 2;
				$logoutpage = 'module/admin';
					if (in_array($admin, $roles)) {
				*/
					
				echo '
								
				<li>
					<a href="'. $baseurl . 'portal">
					<i class="icon-rocket"></i>
					<span class="title">Member Dashboard</span>
					</a>
				</li>
				
				<li>
					<a href="'. $baseurl . 'portal/pickup.php">
					<i class="icon-rocket"></i>
					<span class="title">Request Pickup</span>
					</a>
				</li>
				
				<li>
					<a href="'. $baseurl . 'portal/complaints.php">
					<i class="icon-rocket"></i>
					<span class="title">Comments & Complaints</span>
					</a>
				</li>
				
				<li>
					<a href="'. $baseurl . 'portal/profile.php">
					<i class="icon-rocket"></i>
					<span class="title">My Profile</span>
					</a>
				</li>
				
				
				<li>
					<a href="'. $baseurl . 'portal/change.php">
					<i class="icon-rocket"></i>
					<span class="title">Change Password</span>
					</a>
				</li>';
				
				?>
				
				<li>
					<a href="<?php echo $baseurl; ?>logout.php">
					<i class="icon-rocket"></i>
					<span class="title">Logout</span>
					</a>
				</li>
				
				
				
				 

				 
				 <?php
				/*
				 * *****************************************************
				 * General links
				 * *****************************************************
				 */
				 ?>
				
				
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->