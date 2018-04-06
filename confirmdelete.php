
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
		<h5>Delete Confirmation</h5>
		<br>

	
		<?php 
$EMPNO=$_GET['id'];
		?>
		
		

              
		
		Are u sure to delete the record for  <? echo $EMPNO?>	
		<br>
		
				
		<a href="delete.php?EMPNO=<? echo $EMPNO?>">Yes</a>
		<a href="search.php">No</a>
		<br>

		</form>

		<!-- ***********Edit your content ENDS here******** -->
		
	</div><!-- end main content -->
	

	<?php
		//include the sidebar menu
		include ("inc/sidebar-menu.php");
	?>

  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>