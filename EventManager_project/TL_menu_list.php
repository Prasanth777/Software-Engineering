<?php 
session_start();
error_reporting(0);
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
$x=$_SESSION['name'];
$qry="INSERT INTO teamlead_profile VALUES('$x','','','','','')";
$res=mysqli_query($con,$qry);
?> 
<section class="sidebar"> 
<center><h2>Team Lead Menu</h2></center>
<ul>
	<li><a href="tl_view_profile.php">View Profile</a></li>
    <li><a href="tl_Edit_Profile.php">Edit Profile</a></li>
    <li><a href="tl_Event_History.php">Event History</a></li>
    <li><a href="tl_New_Event.php">New Event</a></li>
    <li><a href="tl_Message.php">Message</a></li>
    <li><a href="tl_Inbox.php">Inbox</a></li>
	<li><a href="tl_add_members.php">Add Members</a></li>
	<li><a href="tl_view_members.php">View Members</a></li>
	<li><a href="tl_edit_members.php">Edit Members</a></li>
	

</ul>


<div class="hh">
<h2><a href="logout.php">Logout</a></h2>
</div>
</section>

