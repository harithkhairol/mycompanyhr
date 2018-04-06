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
		Update Staff info<br>
		<?php 
			$empno=$_GET['id'];//capture name value pair
			$sql="SELECT * FROM employee WHERE empno='$empno'";
			$rs=mysqli_query($db, $sql);//run sql
			$rec=mysqli_fetch_array($rs);//capture one record
		
		?>
		<form class="form" role="form" name="" action="" method="GET">
              
              <input class="form-control" name="empno" 
              type="text"  readonly
			  placeholder="Employee number" 
			  value="<?php echo $rec['EMPNO']; ?>"><br>
			  
              <input class="form-control" name="firstname" type="text" 
			  placeholder="First name"
			  value="<?php echo $rec['FIRSTNAME']; ?>"><br>
			  
			  <input class="form-control" name="lastname" type="text" 
			  placeholder="Last name"
			  value="<?php echo $rec['LASTNAME']; ?>"><br>
			  			  
			  <input class="btn btn-embosed btn-primary" type="submit" 
			  name="btnupdate"
			  value="UPDATE"><br>

		</form>
		<hr>
		
		<?php 
		
		
		if($_GET['btnupdate']=='UPDATE'){
			$empno=$_GET['empno'];
			$firstname=$_GET['firstname'];
			$lastname=$_GET['lastname'];
			
			$sql="UPDATE employee SET
		FIRSTNAME='$firstname',
		LASTNAME='$lastname'
		WHERE empno='$empno'";
			$rs=mysqli_query($db, $sql);
			if($rs==true){//berjaya simpan dalam table
				echo "The record for $firstname $lastname is SAVED<br>";
				
		}
		else{//tak berjaya
			echo mysqli_error($link);
		}}
		
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
