<?php
include("header1.php");
include("DH_menu_list.php");
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
	if(isset($_POST['dh_team_name'])&&isset($_POST['dh_teamid'])&&isset($_POST['dh_lead_id'])&&isset($_POST['dh_lead_password']))
	{
	//echo "hello";
	$x=$_POST['dh_team_name'];
	$y=$_POST['dh_teamid'];
	$z=$_POST['dh_lead_id'];
	$w=$_POST['dh_lead_password'];
	$qry="INSERT INTO teams VALUES('$x','$y','$z','$w')";
	$res=mysqli_query($con,$qry);
	if($res)
		   { 
	   ?>
	   <script lang="javascript">
		   window.location.href="dh_view_team.php";
		   </script>
	<?php
			}
	else 
		{
			?>
			
			<script lang="javascript">
		   window.location.href="dh_add_team.php";
		   </script>

		   <?php 
		}
	}
?>

<section id="dh_addteam">
<form action="dh_add_team.php" method="post">
<fieldset>
<legend>Add Team</legend>
	Team Name:&nbsp;&nbsp;<input type="text" id="dh_team_name" name="dh_team_name"><br>
	Team ID:&nbsp;&nbsp;<input type="text" id="dh_teamid" name="dh_teamid"><br>
	Team Lead ID:&nbsp;&nbsp;<input type="text" id="dh_lead_id" name="dh_lead_id"><br>
	Team Lead Password:&nbsp;&nbsp;<input type="password" id="dh_lead_password" name="dh_lead_password"><br>
	<input type="submit" id="sub" >
</fieldset>
</form>
</section>

<?php 
include("footer.php");
?>


