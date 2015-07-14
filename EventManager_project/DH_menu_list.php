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
$qry="INSERT INTO department_profile VALUES('','','','','','','$x')";
$res=mysqli_query($con,$qry);
?> 
<section class="sidebar"> 
<center><h2>Department Head Menu</h2></center>
<ul class="sideul">
	<li><a href="dh_view_profile.php">View Profile</a></li>
    <li><a href="dh_Edit_Profile.php">Edit Profile</a></li>
    <li><a href="dh_Event_History.php">Event History</a></li>
    <li><a href="dh_Approve_Events.php">Approve Events</a></li>
    <li><a href="dh_Message.php">Message</a></li>
    <li><a href="dh_Inbox.php">Inbox</a></li>
	<li><a href="dh_add_team.php">Add Team</a></li>
	<li><a href="dh_view_team.php">View Team</a></li>
	<li><a href="dh_edit_team.php">Edit Team</a></li>

</ul>

<div class="hh">
<h2><a href="logout.php">Logout</a></h2>
</div>
</section>

