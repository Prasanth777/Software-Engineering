<?php
session_start();
error_reporting(0);
$con = mysqli_connect("localhost","root", "", "event manager");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  $d=$_SESSION['abc'];
  $x="teams";
  $a=$_POST['dh_team_name'];
  $b=$_POST['dh_lead_user_id'];
  $c=$_POST['dh_lead_password'];
  $qry="UPDATE $x SET name='$a',teamleadid='$b',teamleadpass='$c' WHERE id='$d'";
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
		   window.location.href="dh_edit_team_id.php";
		   </script>
		   <?php
}

		
			?>
  