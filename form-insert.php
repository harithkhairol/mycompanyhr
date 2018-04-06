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
		Insert New Staff<br>
		<form class="form" role="form" name="" action="" method="GET">
			  <input class="form-control" name="empno" 
			  maxlength="6" type="text" 
			  placeholder="Employee number..."><br>
			  <input class="form-control" name="firstname" type="text" 
			  placeholder="Firstname..."><br>
			  <input class="form-control" name="lastname" type="text" 
			  placeholder="Lastname..."><br>
			  <input class="btn btn-embosed btn-primary" type="submit" 
			  value="Save new Record"><br>

		</form>
		<hr>
		<?php 
		if(isset($_GET['empno'])){//jika ada kontent dalam borang
			$empno=$_GET['empno'];
			$firstname=$_GET['firstname'];
			$lastname=$_GET['lastname'];

			$sql="insert into employee
			(EMPNO, FIRSTNAME, LASTNAME)
			values 
			('$empno','$firstname','$lastname')";
			$rs=mysqli_query($db, $sql);
			if($rs==true){//berjaya simpan dalam table
				echo "The record for $firstname $lastname is SAVED<br>";
				
			}else{//tak berjaya masukkan rekod
				echo mysqli_error($db);
			}
		}
		else{
			echo "Please provide the information to save<br>";
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
