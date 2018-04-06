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
		Simple Staff Search<br>
		<form class="form-inline" role="form" name="" action="" method="GET">

			  <input class="form-control" name="staffname" type="text" placeholder="Staff name...">
			  <input class="btn btn-embosed btn-primary" type="submit" value="Search">

		</form>
		<hr>
		<?php
			$searchkey=$_GET['staffname'];
			//define SQL command
			$sql="SELECT EMPNO, FIRSTNAME, LASTNAME, WORKDEPT 
			FROM employee 
			WHERE FIRSTNAME LIKE '%$searchkey%'";
			//run query
			$qr=mysqli_query($db,$sql);
			//echo $sql;
			//if data not found
			if(mysqli_num_rows($qr)==0){
				echo "Sorry, no match found!";
			}else{//match found
				echo "Search found for $searchkey";
				?>
				<table width="90%" 
				class='table table-hover table-bordered'>
						<tr align="center">
							<td>Employee no.</td>
							<td>First name</td>
							<td>Last name</td>
							<td>Dept code</td>
						</tr>
				<?php
					while($rekod=mysqli_fetch_array($qr)){
						echo "<tr>";
						echo "<td>".$rekod['EMPNO']."</td>";
						echo "<td>".$rekod['FIRSTNAME']."</td>";
						echo "<td>".$rekod['LASTNAME']."</td>";
						echo "<td>".$rekod['WORKDEPT']."</td>";
						echo "<tr>";
					}
			}//end match found
		
		?>
		</table>

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
