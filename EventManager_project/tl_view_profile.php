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
?>
<section id="tl_viewprof">
<fieldset>
				<legend>View Profile</legend>
				<?php
           $x=$_SESSION['name'];
           $qry = "SELECT * FROM teamlead_profile where user_id='$x'";
           $res = mysqli_query($con, $qry);
           
           $row=  mysqli_fetch_array($res,MYSQLI_ASSOC);
           
        
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
	  
?>
</fieldset>
				</section>
<?php
include("footer.php")
?>

