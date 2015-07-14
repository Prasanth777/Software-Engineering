<?php
include("header2.php");
include("TL_menu_list.php");
error_reporting(0);
session_start();
//echo $_SESSION["uid"];
$con = mysqli_connect("localhost","root", "", "event manager");
 
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
    exit();
  }
  if (empty($_SESSION['name']))
	{  
		header("Location: home.php");
		exit();
	}
	
	//echo $a;
	if(isset($_POST['tm_id'])&&isset($_POST['tm_password']))
	{
		$x1=$_SESSION['name'];
	$qry1="SELECT id FROM teams WHERE teamleadid='$x1'";
	$res1=mysqli_query($con,$qry1);
	$row1=mysqli_fetch_array($res1);
	$a=$row1[0];

	//$x=$_POST['tm_team_name'];
	$y=$_POST['tm_id'];
	//$z=$_POST['tm_lead_id'];
	$w=$_POST['tm_password'];
	$qry="INSERT INTO team_members VALUES('$a','$y','$w')";
	$res=mysqli_query($con,$qry);
	$qry1="INSERT INTO teammem_profile VALUES('$y','','','','','')";
	$res1=mysqli_query($con,$qry1);
	if($res)
		   { 
	   ?>
	   <script lang="javascript">
		   window.location.href="tl_view_members.php";
		   </script>
	<?php
			}
	else 
		{
		//	echo "hey";
			?>
			
			<script lang="javascript">
		   window.location.href="home.php";
		   </script>

		   <?php 
		//echo "hey";
		}
	}
?>

<section id="tl_addteammembers">
<form action="tl_add_members.php" method="post">
<fieldset>
<legend>Add Team Members</legend>
	Team Member User ID:&nbsp;&nbsp;<input type="text" id="tm_id" name="tm_id"><br>
	Team Member Password:&nbsp;&nbsp;<input type="password" id="tm_password" name="tm_password"><br>
	<input type="submit" id="sub" >
</fieldset>
</form>
</section>
<?php
include("footer.php");
?>
