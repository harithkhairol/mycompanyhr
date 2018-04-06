<?php
//include the database connectivity setting
include ("inc/dbconn.php");
//include the navigation bar
include ("inc/header-navbar.php");?>

<div class="container">
	<br>
	<br>
  <div class="row">
	  <div class="col-md-9" name="maincontent" id="maincontent">
		<!-- ***********Edit your content STARTS from here******** -->
		<h5>Template for PHP-MySQL Exercises</h5>
		Login<br>
		<form class="form" role="form" name="" action="verify.php" method="POST">

			  <input class="form-control" name="empno" 
			  type="text" placeholder="Employee number">
			  <br>
			  <input class="form-control" name="password" 
			  type="text" placeholder="password">
			  <br>
			  <input class="btn btn-embosed btn-primary" 
			  type="submit" value="Login">

		</form>
		<hr>
		

		<!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	

	<?php
		//include the sidebar menu
		//include ("inc/sidebar-menu.php");
	?>
  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>