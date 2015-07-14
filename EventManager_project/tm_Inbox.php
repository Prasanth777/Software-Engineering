<?php
include("header3.php");
include("TM_menu_list.php");
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
//if(isset($_POST['tm_mess_to'])&&($_POST['tm_mess_txtarea']))

//	$x=$_POST['tm_mess_to'];
$y=$_SESSION['name'];
//$z=$_POST['tm_mess_txtarea'];
$qry="SELECT sender,message FROM messages WHERE receiver='$y'";
$res=mysqli_query($con,$qry);
?><center><h2>Member Inbox</h2></center>
<?php
if($res)
{
	while($row=mysqli_fetch_array($res))
	{
?>

<section id="tm_inbox_sec">
<fieldset>

From:&nbsp;&nbsp;<?php echo $row[0] ?><br/><br/>
Message:&nbsp;&nbsp;<?php echo $row[1] ?><br/><br/><hr/>
</fieldset>
</section>

<?php 
	}
}
?>

<?php
include("footer.php");
?>

