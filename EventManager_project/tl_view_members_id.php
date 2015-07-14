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
$a=$_POST['teammem_id'];
$qry="SELECT name,reg_no,department,contact_no,email_id FROM teammem_profile WHERE user_id='$a'";
$res=mysqli_query($con,$qry);
$row=mysqli_fetch_array($res);
if($row)
{
	?>
				Name:&nbsp;&nbsp;<?php echo $row['name']; ?><br /><br />
				Registration no:&nbsp;&nbsp;<?php echo $row['reg_no'];?><br /><br />
				Email:&nbsp;&nbsp;<?php echo $row['email_id']; ?><br /><br />
				Department:&nbsp;&nbsp;<?php echo $row['department'];?><br /><br />
				Contact No:&nbsp;&nbsp;<?php echo $row['contact_no'];?><br /><br />
<?php
}
else
{
	echo "team member doesn't exist";
	?>
	<script lang="javascript">
		   window.location.href="tl_view_members.php";
		   </script>
	<?php 
	echo "sorry that team member doesn't exist!!!";
}
include("footer.php")
?>