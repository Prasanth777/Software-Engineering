<?php
error_reporting(0);
include("header4.php");
$con = mysqli_connect("localhost","root", "", "event manager");
 
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
    exit();
  }
  $qry0="SELECT eventid FROM intended WHERE SCSE='YES'";
  $row0=mysqli_query($con,$qry0);
  $qry1="SELECT eventid FROM intended WHERE SITE='YES'";
  $row1=mysqli_query($con,$qry1);
  $qry2="SELECT eventid FROM intended WHERE SENSE='YES'";
  $row2=mysqli_query($con,$qry2);
  $qry3="SELECT eventid FROM intended WHERE SELECT1='YES'";
  $row3=mysqli_query($con,$qry3);
  $qry4="SELECT eventid FROM intended WHERE SMBS='YES'";
  $row4=mysqli_query($con,$qry4);
  $qry5="SELECT eventid FROM intended WHERE SBST='YES'";
  $row5=mysqli_query($con,$qry5);
  $qry6="SELECT eventid FROM intended WHERE SAS='YES'";
  $row6=mysqli_query($con,$qry6);
  $qry7="SELECT eventid FROM intended WHERE SSL1='YES'";
  $row7=mysqli_query($con,$qry7);
  
  
  
?>
<div class="home1">
<fieldset>
<legend><center><h1>Events</h1></center><br/></legend>
<fieldset> 
<h2>SCSE</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row0))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SITE</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row1))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SENSE</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row2))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SELECT</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row3))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SMBS</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row4))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SBST</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row5))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SAS</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row6))
{

$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
<fieldset> 
<h2>SSL</h2>
<table border=2>
<tr>
<th>Event ID</th>
<th>Event Name</th>
<th>Organising Team</th>
<th>Organiser</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>About Event</th>
</tr>
<?php
while($n=mysqli_fetch_row($row7))
{$b="SELECT id,name,Team_Name,TeamLead_Id,date,time,venue,aboutevent FROM events WHERE id='$n[0]' AND status='Approved'";
$bq=mysqli_query($con,$b);
$bqq=mysqli_fetch_row($bq);
	?>
<tr>
<td><?php echo $bqq[0];?></td>
<td><?php echo $bqq[1];?></td>
<td><?php echo $bqq[2];?></td>
<td><?php echo $bqq[3];?></td>
<td><?php echo $bqq[4];?></td>
<td><?php echo $bqq[5];?></td>
<td><?php echo $bqq[6];?></td>
<td><?php echo $bqq[7];?></td>
</tr>
<?php
}
?>
</table>
</fieldset><br/>
</fieldset>

</div>
</div>
