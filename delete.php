
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
		<h5>Delete</h5>
		<br>
		
		<?
		
$EMPNO=$_GET['id']; 
$sql="delete from employee where EMPNO='$EMPNO' "; 
$q=mysqli_query($db,$sql);
if ($q==true){ 
echo "The record for $EMPNO has been deleted"; } 
else{ echo "Fail to delete record for $EMPNO"; 
echo mysqli_error($db); } ?>
<br>
<a href="search.php">go back to search</a>
<br>
</body>
</html>
  </div><!-- end row -->

</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>