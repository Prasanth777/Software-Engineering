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
//if(isset($_POST['tl_mess_to'])&&($_POST['tl_mess_txtarea']))

//	$x=$_POST['tl_mess_to'];
$y=$_SESSION['name'];
//$z=$_POST['tl_mess_txtarea'];
$qry="SELECT sender,message FROM messages WHERE receiver='$y'";
$res=mysqli_query($con,$qry);
?><center><h2>Inbox</h2></center>
<?php
if($res)
{
	while($row=mysqli_fetch_array($res))
	{
?>

<section id="tl_inbox_sec">
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
?><?php
include("header2.php");
include("TL_menu_list.php");
?>
<section id="tl_inbox_sec">
<fieldset>
<legend>Inbox</legend>
From:<input type="text" id="tl_inbox_from" name="tl_inbox_from" size="60" placeholder="abc" disabled> <br />
Message:<textarea rows="5" cols="60" id="tl_inbox_msg" name="tl_inbox_msg" disabled>the message is abc</textarea> <br />
</fieldset>
</section>
<?php
include("footer.php");
?>
