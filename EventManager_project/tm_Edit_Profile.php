<?php
include("header3.php");
include("TM_menu_list.php");
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
$sql="SELECT * FROM teammem_profile WHERE user_id='$a7'";
$result=mysqli_query($con,$sql);
$rows=mysqli_fetch_array($result);
	?>
<section id="tm_editprof">
<form action="tm_edit_prof2.php" method="post">
<fieldset>
<legend>Member Profile</legend>
Name:<input type="text" id="tm_name" name="tm_name" value="<?php echo $rows['name']?>"><br>
Registration No:<input type="text" id="tm_regid" name="tm_regid" value="<?php echo $rows['reg_no']?>"><br>
Email: <input type="email" id="tm_email" name="tm_email" value="<?php echo $rows['email_id']?>"><br>
Department:<input type="text" id="tm_dept" name="tm_dept" value="<?php echo $rows['department']?>"><br>
Contact No:<input type="number" id="tm_cont" name="tm_cont" value="<?php echo $rows['contact_no']?>"><br>
<input type="submit" value="submit" id="tm_editprof_sub" name="tm_editprof_sub">
</fieldset>

</form>
</section>
<?php
include("footer.php");
?>

