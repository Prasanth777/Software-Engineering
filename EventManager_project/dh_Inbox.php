<?php
include("header1.php");
include("DH_menu_list.php");
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
//if(isset($_POST['dh_mess_to'])&&($_POST['dh_mess_txtarea']))

//	$x=$_POST['dh_mess_to'];
$y=$_SESSION['name'];
//$z=$_POST['dh_mess_txtarea'];
$qry="SELECT sender,message FROM messages WHERE receiver='$y'";
$res=mysqli_query($con,$qry);
?><center><h2>Inbox</h2></center>
<?php
if($res)
{
	while($row=mysqli_fetch_array($res))
	{
?>

<section id="dh_inbox_sec">
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