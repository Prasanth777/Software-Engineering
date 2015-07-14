<?php
include("header2.php");
include("TL_menu_list.php");
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
	
	$a=$_POST['tl_member_reg'];
	$qry="SELECT teammempass FROM team_members WHERE memid='$a'";
	$res=mysqli_query($con,$qry);
	
	$row=mysqli_fetch_array($res);
	if($row)
		$_SESSION['abc']=$a;
	else if(!$row)
	{
		?><script>
        window.location.href="tl_edit_members.php";
		alert("Invalid Team ID");
		</script>
		<?php
		
	}
		

?>
<section id="tl_editmember_id">
<form action="temp3.php" method="post">
<fieldset>
<legend>Edit Member</legend>
Password:<input type="text" id="tl_member_password" name="tl_member_password" value="<?php echo $row[0]?>"><br><br>
<input type="submit" id="tl_memberedit_submit"><br>
</fieldset>
</section>
<?php
include("footer.php");?>