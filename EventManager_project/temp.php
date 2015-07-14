<?php
session_start();
$con = mysqli_connect("localhost","root", "", "event manager");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  $x="department_profile";
  $b1=$_POST['dh_name'];
  $b2=$_POST['dh_email'];
  $b3=$_POST['dh_dept'];
  $b4=$_POST['dh_desig'];
  $b5=$_POST['dh_cabin'];
  $b6=$_POST['dh_cont'];
  $c=$_SESSION['name'];
  $sql="UPDATE $x SET Name='$b1', Email_Id='$b2', Department='$b3', Designation='$b4', Cabin='$b5', Contact='$b6' WHERE User_Id='$c'";
  $result=mysqli_query($con,$sql);
  if($result)
		   { 
	   ?>
	   <script lang="javascript">
		   window.location.href="dh_view_profile.php";
		   </script>
	<?php
			}
else 
{
			?>
			
			<script lang="javascript">
		   window.location.href="dh_edit_profile.php";
		   </script>
		   <?php
}

		
			?>
  