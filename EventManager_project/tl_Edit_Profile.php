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
	$a7=$_SESSION['name'];
$sql="SELECT * FROM teamlead_profile WHERE user_id='$a7'";
$result=mysqli_query($con,$sql);
$rows=mysqli_fetch_array($result);
	?>
<section id="tl_editprof">
<form action="tl_edit_prof2.php" method="post">
<fieldset>
<legend>Profile</legend>
Name:<input type="text" id="tl_name" name="tl_name" value="<?php echo $rows['name']?>"><br>
Registration No:<input type="text" id="tl_regid" name="tl_regid" value="<?php echo $rows['reg_no']?>"><br>
Email: <input type="email" id="tl_email" name="tl_email" value="<?php echo $rows['email_id']?>"><br>
Department:<input type="text" id="tl_dept" name="tl_dept" value="<?php echo $rows['department']?>"><br>
Contact No:<input type="number" id="tl_cont" name="tl_cont" value="<?php echo $rows['contact_no']?>"><br>
<input type="submit" value="submit" id="tl_editprof_sub" name="tl_editprof_sub">
</fieldset>

</form>
</section>
<?php
include("footer.php");
?>

