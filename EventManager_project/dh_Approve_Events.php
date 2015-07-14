<?php
error_reporting(0);
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
$qry="SELECT * FROM events WHERE status='Pending'";
$res=mysqli_query($con,$qry);
$count=1;


		
							?>

<section id="contents">

<article class="post">
  <form action="dh_Approve_Events.php" method="post">
  <fieldset>
  <legend>Approve Events</legend>
  
  <section class="entry">
   
    <table width="428" border="1">
  <tr>

    <th width="122" scope="col">Id</th>
	<th width="171" scope="col">Event Name</th>
	<th width="171" scope="col">Team Name</th>
	<th width="171" scope="col">TeamLead ID</th>
	<th width="171" scope="col">Date</th>
	<th width="171" scope="col">Time</th>
	<th width="171" scope="col">Venue</th>
	<th width="171" scope="col">Approve</th>
	<th width="171" scope="col">Reject</th>
	<th width="171" scope="col">Status</th>
  </tr>
  <?php 
  $i=0;
  while($row=mysqli_fetch_row($res))
  {
	  ?>
	  <tr id="row<?php echo $i;?>">
	  <td width="113" scope="col"><?php echo $row[0] ?></td>
	  <td width="113" scope="col"><?php echo $row[1] ?></td>
	  <td width="113" scope="col"><?php echo $row[2] ?></td>
	  <td width="113" scope="col"><?php echo $row[3] ?></td>
	  <td width="113" scope="col"><?php echo $row[4] ?></td>
	  <td width="113" scope="col"><?php echo $row[5] ?></td>
	  <td width="113" scope="col"><?php echo $row[6] ?></td>
 
	  <td width="113" scope="col"><center><input type="radio" name="app_event<?php echo $i;?>" id="app_event<?php echo $i;?>" value="accept" ></center></td>
	  <td width="113" scope="col"><center><input type="radio" name="app_event<?php echo $i;?>" value="reject" ></center></td>
	  <td width="113" scope="col"><input type="text" name="dh_app_eve_stat" id="dh_app_eve_stat<?php echo $i;?>" value="<?php echo $row[7];?>" disabled>
	  <script lang="javascript">
	  /*if(document.getElementById("dh_app_eve_stat<?php echo $i;?>").value=="Approved")
	  {<?php echo "yoyo";?>
		  document.getElementById("app_event<?php echo $i;?>").disabled= true;}
		
	  */
	  </script>
	  <?php 
			
			switch($n=$_POST['app_event'.$i])
			{
				case "accept":{$qry0="UPDATE events SET status='Approved' WHERE id='$row[0]'";
				                
								$res0=mysqli_query($con,$qry0); 
								/*if($res0)
									echo"sucess";
								else
									echo"fail";*/
								$qry4="INSERT INTO department_event_history VALUES('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]','$row[6]','$row[5]') ";	
								$res4=mysqli_query($con,$qry4);
								if($res4)
								{?>
									<script lang="javascript">
									window.location.href="dh_Event_History.php";
									</script>
									<?php
								}
								else
								{
									?>
									<script lang="javascript">
								    window.location.href="dh_Approve_Events.php";
								    </script>
									<?php 
								}
		 
								
	 ?> 
							<script lang="javascript">
			                document.getElementById("dh_app_eve_stat"+<?php echo $i;?>).value="<?php echo "Approved"?>";
							
							
							</script>						
							<?php
				            //$_POST['dh_app_eve_stat']="Approved";
							break;
							}
			case "reject":{$qry0="UPDATE events SET status='Rejected' WHERE id='$row[0]'";
				                $res0=mysqli_query($con,$qry0);
							?>
							<script lang="javascript">
			                document.getElementById("dh_app_eve_stat"+<?php echo $i;?>).value="Rejected";
							
							</script>
							<?php
							/*$qry5="DELETE FROM dh_Event_History WHERE status='Rejected'";
							$res5=mysqli_query($con,$qry5);
							if($res5)
								echo "hel";
							else
								echo "fai";*/
				//$_POST['dh_app_eve_stat']="Rejected";
			             
							break; 	
			
			}  
		}					?></td>
			
     </tr>	
  <?php
 
$i++;
		 }
		 //$qry4="INSERT INTO department_event_history('sno','id','name','org_team','organizer','date','venue','time') SELECT events.sno,events.id,events.name,events.Team_Name,events.Teamlead_ID,events.date,events.venue,events.time FROM events WHERE events.status='Approved'";
	     
		 ?>
						
  
  </table>
  </section>
    <input id="dh_appeve_submit" type="submit" value="submit">
  </fieldset>
 
  </form>
</article>

</section>
	<?php
include("footer.php");
?>