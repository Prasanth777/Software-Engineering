<?php
session_start();
$con = mysqli_connect("localhost","root", "", "event manager");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  $x="teammem_profile";
  $b1=$_POST['tm_name'];
  $b2=$_POST['tm_email'];
  $b3=$_POST['tm_dept'];
  //$b4=$_POST['tm_desig'];
  //$b5=$_POST['tm_cabin'];
  $b6=$_POST['tm_cont'];
  $b7=$_POST['tm_regid'];
  $c=$_SESSION['name'];
  $sql="UPDATE $x SET name='$b1',reg_no='$b7',email_id='$b2',department='$b3',contact_no='$b6' WHERE user_id='$c'";
  $result=mysqli_query($con,$sql);
  if($result)
		   { 
	   ?>
	   <script lang="javascript">
		   window.location.href="tm_view_profile.php";
		   </script>
	<?php
			}
else 
{
			?>
			
			<script lang="javascript">
		   window.location.href="tm_edit_profile.php";
		   </script>
		   <?php
}

		
			?>
  