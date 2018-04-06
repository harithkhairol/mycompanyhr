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
		<h5>Simple Staff Search</h5>
		<br>
		<form name="formsearch" action="" method="GET" 
			class="form-inline" role="form" >
			  
			  <input class="form-control" name="staffname" 
			  type="text" placeholder="Staff name...">
			  <input class="btn btn-embosed btn-info" 
			  type="submit" value="Search">

		</form>
		<hr>
		<?php
		//capture textbox data
		if(isset($_GET['staffname'])){
			$key=$_GET['staffname'];
		}else{//tiada data dlm textbox
			echo "Please enter the staff name<br>";
			$key="No search key...";
		}
		//Create SQL query, add WHERE clause to narrow listing
		$query="select EMPNO, FIRSTNAME, LASTNAME, WORKDEPT, PHONENO 
		from employee
		where FIRSTNAME like '%$key%'";
		
		//Execute the query
		$qr=mysqli_query($db,$query);
		if($qr==false){//sql error
			echo ("Query cannot be executed!<br>");
			echo ("SQL Error : ".mysqli_error($db));
		}
		else{//sql successful
			//echo ("Query successfully executed!<br>");
		}
		
		if(mysqli_num_rows($qr)==0){//no record found
			echo ("No record by that name: $key...<br>");
		}//end no record
		else{//there is/are record(s)
			echo ("Found ".mysqli_num_rows($qr)." records by that name: $key...<br>");
			echo "<table width='100%' class='table table-hover table-bordered'>
				<thead>
					<th>EMPNO</th>
					<th>FIRSTNAME</th>
					<th>LASTNAME</th>
					<th>DEPARTMENT</th>
				</thead>";
			
			while ($rekod=mysqli_fetch_array($qr)){
				$id=$rekod['EMPNO'];
				$url="viewstaff.php?id=".$id;
				$urldelete="deletestaff.php?id=".$id;
				
				echo "<tr>";
				echo "<td> $id
				<a href='$url' class='fui-window' 
				title='Update staff $id info' 
				data-toggle='tooltip'></a>
				
				<a href='$urldelete' class='fui-trash' 
				title='Delete staff $id' 
				data-toggle='tooltip'></a>
				</td>";
				echo "<td>".$rekod['FIRSTNAME']."</td>";
				echo "<td>".$rekod['LASTNAME']."</td>";
				echo "<td>".$rekod['WORKDEPT']."</td>";
				echo "</tr>";
			}//end display records
			echo "</table>";
		}//end record found
		
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
