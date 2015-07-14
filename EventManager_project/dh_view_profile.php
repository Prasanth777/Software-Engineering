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

?>
<section class="dh_viewprof">
				<fieldset>
				<legend>View Profile</legend>
				<?php
           $x=$_SESSION['name'];
           $qry = "SELECT * FROM department_profile where User_Id='$x'";
           $res = mysqli_query($con, $qry);
           
           $row=  mysqli_fetch_array($res,MYSQLI_ASSOC);
           
        
           if($row)
           {  
			?>
				
				Name:&nbsp;&nbsp;<?php echo $row['Name']; ?><br /><br />
				Email:&nbsp;&nbsp;<?php echo $row['Email_Id']; ?><br /><br />
				Department:&nbsp;&nbsp;<?php echo $row['Department'];?><br /><br />
				Designation:&nbsp;&nbsp;<?php echo $row['Designation'];?><br /><br />
				Cabin-No:&nbsp;&nbsp;<?php echo $row['Cabin'];?><br /><br />
				Contact No:&nbsp;&nbsp;<?php echo $row['Contact'];?><br /><br />
				</fieldset>
				</section>
			<?php 
 			
		   }
	  
?>	  
<?php 
include("footer.php");
?>