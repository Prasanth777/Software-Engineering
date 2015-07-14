<?php
include("header2.php");
error_reporting(0);
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
           $qry = "SELECT id,name,date,time,venue,status FROM events";
           $res = mysqli_query($con, $qry);
          // $row=  mysqli_fetch_row($res);
           // $a= mysqli_num_rows($res);
        
           
?>
<section id="tl_event_history">

<article class="post">
  <header class="postheader">
  <h2>Event History</h2>
  </header>
  <section class="entry">
  <font color="#330000">
    <table width="428" border="1">
  <tr>
   
    <th width="122" scope="col">Id</th>
	<th width="171" scope="col">Name</th>
	<th width="171" scope="col">Date</th>
	<th width="171" scope="col">Time</th>
	<th width="171" scope="col">Venue</th>
		<th width="171" scope="col">Status</th>
  </tr>
  <?php
	//$i=0;
	while($row=mysqli_fetch_row($res))
	{ 
         ?>
      		    <tr>
	            <td width="113" scope="col"><?php echo $row[0] ?></td>
				<td width="400" scope="col"><?php echo $row[1] ?></td>
				<td width="171" scope="col"><?php echo $row[2] ?></td>
				<td width="600" scope="col"><?php echo $row[3] ?></td>
				<td width="171" scope="col"><?php echo $row[4] ?></td>
				<td width="2500" scope="col"><?php echo $row[5] ?></td>
						
				</tr>
				
	<?php
	//$a--;
	//$i++;
	}
	?>	
</article>
</section>
</section>
<?php
include("footer.php");
?>