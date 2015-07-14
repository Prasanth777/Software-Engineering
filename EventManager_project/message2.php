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
if(!(empty($_POST['tl_mess_to'])))
{
	$x=$_POST['tl_mess_to'];
	if(!(empty($_POST['tl_mess_txtarea'])))
		{
			$z=$_POST['tl_mess_txtarea'];
			$y=$_SESSION['name'];
			$qry="INSERT INTO messages VALUES('$y','$x','$z')";
			$res=mysqli_query($con,$qry);
			if($res)
				{ echo "Message sent succesfully";
				}
			else if(!$res)
				echo "Message cannot be sent";
		}
	
	else
		{
			//echo "please enter a message";
			?>
			<script lang="javascript">
			window.location.href="tl_Message.php";
			alert ("please enter a message");
			</script>
			<?php 
		}
}
else
{
	//echo "please enter a valid user id.";
	?>
	<script lang="javascript">
	window.location.href="tl_Message.php";
	alert("please enter a valid user id.");
	</script>
	<?php
}



include("footer.php");
?>
