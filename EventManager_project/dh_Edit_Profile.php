<?php
include("header1.php");
include("DH_menu_list.php");
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
$sql="SELECT * FROM department_profile WHERE User_Id='$a7'";
$result=mysqli_query($con,$sql);
$rows=mysqli_fetch_array($result);
?>
<section class="dh_editprof">
<form action="temp.php" method="post">
<fieldset>
<legend>Profile</legend>
Name:<input type="text" id="dh_name" name="dh_name" value="<?php echo $rows['Name']?>"><br>
Email: <input type="email" id="dh_email" name="dh_email" value="<?php echo $rows['Email_Id']?>"><br>
Department:<input type="text" id="dh_dept" name="dh_dept" value="<?php echo $rows['Department']?>"><br>
Designation:<input type="text" id="dh_desig" name="dh_desig" value="<?php echo $rows['Designation']?>"><br>
Cabin-No:<input type="text" id="dh_cabin" name="dh_cabin" value="<?php echo $rows['Cabin']?>"><br>
Contact No:<input type="number" id="dh_cont" name="dh_cont" value="<?php echo $rows['Contact']?>"><br>
<input type="submit" value="submit" id="dh_editprof_sub" name="dh_editprof_sub">
</fieldset>

</form>
</section>
<?php
include("footer.php");
?>