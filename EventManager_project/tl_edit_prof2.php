<?php
session_start();
$con = mysqli_connect("localhost","root", "", "event manager");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  $x="teamlead_profile";
  $b1=$_POST['tl_name'];
  $b2=$_POST['tl_email'];
  $b3=$_POST['tl_dept'];
  //$b4=$_POST['tl_desig'];
  //$b5=$_POST['tl_cabin'];
  $b6=$_POST['tl_cont'];
  $b7=$_POST['tl_regid'];
  $c=$_SESSION['name'];
  $sql="UPDATE $x SET name='$b1',reg_no='$b7', email_id='$b2', department='$b3', contact_no='$b6' WHERE user_id='$c'";
  $result=mysqli_query($con,$sql);
  if($result)
		   { 
	   ?>
	   <script lang="javascript">
		   window.location.href="tl_view_profile.php";
		   </script>
	<?php
			}
else 
{
			?>
			
			<script lang="javascript">
		   window.location.href="tl_edit_profile.php";
		   </script>
		   <?php
}

		
			?>
  