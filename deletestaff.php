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
		Confirmation to DELETE a record<br>
		<form class="form-inline" role="form" name="" action="" 
		method="GET">
				
			  <h3>Do you realy want to delete EMPNO 
			  <?php echo $id=$_GET['id'];?>
			  ?</h3>
			  <input type="hidden" name="id" 
			  value="<?php echo $_GET['id'];?>">
			  <input class="btn btn-embosed btn-danger" 
			  name="btndelete" type="submit" value="DELETE">
			  <a href="search.php" 
			  class="btn btn-embosed btn-primary">Cancel</a>
		</form>
		<hr>
		<?php 
		if ($_GET["btndelete"]=="DELETE"){//button DELETE clicked
			$sql="delete from employee 
					where EMPNO=".$_GET['id'];//sql qery to delete
			$rs=mysqli_query($db, $sql);
			if($rs==true){//successfully executed
				echo "The record for $id has been deleted!";
				echo "<a href='search.php'> Back</a>";
			}
		}
		?>

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
