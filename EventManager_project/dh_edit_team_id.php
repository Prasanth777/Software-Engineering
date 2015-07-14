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
	
	$a=$_POST['dh_team_editid'];
	
	$qry="SELECT name,teamleadid,teamleadpass FROM teams WHERE id='$a'";
	$res=mysqli_query($con,$qry);
	
	$row=mysqli_fetch_array($res);
	if($row)
		$_SESSION['abc']=$a;
	else if(!$row)
	{
		?><script>
        window.location.href="dh_edit_team.php";
		alert("Invalid Team ID");
		</script>
		<?php
		
	}
		
?>

<section id="dh_editteam_id">
<form action="temp1.php" method="post">
<fieldset>
<legend>Edit Team</legend>
Team Name:<input type="text" id="dh_team_name" name="dh_team_name"value="<?php echo $row[0]?>"><br>
Team Lead ID :<input type="text" id="dh_lead_user_id" name="dh_lead_user_id"value="<?php echo $row[1]?>"><br>
Team Lead Password:<input type="text" id="dh_lead_password" name="dh_lead_password"value="<?php echo $row[2]?>"><br>

<input type="submit" id="dh_lead_edit_submit"><br>
</fieldset>
</form>
</section>
<?php 
include("footer.php");
?>