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
   $x=$_POST['dh_teami_d'];
           $qry = "SELECT memid,memname,memcont,mememail FROM team_members WHERE teamid=$x";
           $res = mysqli_query($con, $qry);
?>
<section id="dh_viewteam_details">

<article class="post">
  <header class="postheader">
  <h2>View Team Details</h2>
  </header>
  <section class="entry">
  
    <table width="428" border="1">
  <tr>
    <th width="113" scope="col">Member ID</th>
    <th width="122" scope="col">Member Name</th>
	<th width="171" scope="col">Contact No:</th>
	<th width="171" scope="col">Email</th>
  </tr>
  <?php
	//$i=0;
	while($row=mysqli_fetch_row($res))
	{ 
         ?>
      		    <tr>
				<td width="400" scope="col"><?php echo $row[0] ?></td>
				<td width="171" scope="col"><?php echo $row[1] ?></td>
				<td width="600" scope="col"><?php echo $row[2] ?></td>
				<td width="171" scope="col"><?php echo $row[3] ?></td>
				</tr>
				
	<?php
	//$a--;
	//$i++;
	}
	?>	
  </table>
</section>
</article>
</section>
<?php 
include("footer.php");
?>