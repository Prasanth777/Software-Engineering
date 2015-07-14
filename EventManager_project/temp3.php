<?php
session_start();
$con = mysqli_connect("localhost","root", "", "event manager");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  $d=$_SESSION['abc'];
  $x="team_members";
  $a=$_POST['tl_member_password'];
    $qry="UPDATE $x SET teammempass='$a' WHERE memid='$d'";
  $res=mysqli_query($con,$qry);
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
			?>
			
			<script lang="javascript">
		   window.location.href="tl_edit_member_id.php";
		   </script>
		   <?php
}

		
			?>
  
  