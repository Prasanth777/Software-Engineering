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
  $x=$_SESSION['name'];
           $qry = "SELECT * FROM teams";
           $res = mysqli_query($con, $qry);
          // $row=  mysqli_fetch_row($res);
           // $a= mysqli_num_rows($res);
        
?>
<section id="dh_viewteam">
<article class="post">
  <header class="postheader">
  <h2>Team Details</h2>
  </header>
  <section class="entry">
 
    <table width="428" border="1">
  <tr>
    <th width="113" scope="col">Team Id</th>
    <th width="122" scope="col">Team Name</th>
	
  </tr>
 <?php
	//$i=0;
	while($row=mysqli_fetch_row($res))
	{ 
         ?>
      		    <tr>
				
	            <td width="400" scope="col"><?php echo $row[1] ?></td>
				
				<td width="400" scope="col"><?php echo $row[0] ?></td>
				
				</tr>
				
	<?php
	//$a--;
	//$i++;
	}
	?>	
	</table>
	<form action="dh_view_team_details.php" method="post">
	Team ID:<input type="text" name="dh_teami_d">  
	<input type=submit>
	</form>
</section>
</article>
</section>
<?php
include("footer.php");
?>