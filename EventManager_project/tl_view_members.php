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
$x=$_SESSION['name'];
           $qry = "SELECT * FROM team_members";
           $res = mysqli_query($con, $qry);
?>
<section id="tl_viewmember">

<article class="post">
  <header class="postheader">
  <h2>Team member Details</h2>
  </header>
  <section class="entry">
 
    <table width="428" border="1">
  <tr>
    <th width="113" scope="col">Team member Id</th>
    
	
  </tr>
 <?php
	//$i=0;
	while($row=mysqli_fetch_row($res))
	{ 
         ?>
      		    <tr>
				
	         
				
				<td width="400" scope="col"><?php echo $row[1] ?></td>
				
				</tr>
				
	<?php
	//$a--;
	//$i++;
	}
	?>	
	</table>
	<form action="tl_view_members_id.php" method="post">
	Enter team member id:<input type="text" id="teammem_id" name="teammem_id">
	<input type="submit" value="submit">
	</form>
</article>
</section>
</section>
<?php
include("footer.php");
?>