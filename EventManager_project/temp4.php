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
	
	 $qry2="SELECT * FROM events";
		$res2=mysqli_query($con,$qry2);
		$i=mysqli_num_rows($res2);
	echo $i;
		$j=$i+1;
		echo $j;
	//if(isset($_POST['tl_evt_name'])&&isset($_POST['tl_evt_date'])&&isset($_POST['tl_evt_time'])&&isset($_POST['tl_evt_venue'])&&isset($_POST['tl_evt_abt'])&&isset($_POST['tl_evt_inttar1']))
	{echo "hey";
       echo $i;
		$x1=$_SESSION['name'];
	$qry3="SELECT name FROM teams WHERE teamleadid='$x1' ";
	$res3=mysqli_query($con,$qry3);
	$row3=mysqli_fetch_array($res3);
		$a=$_POST['tl_evt_name'];
		
		$b=$_POST['tl_evt_date'];
		$c=$_POST['tl_evt_time'];
		$d=$_POST['tl_evt_venue'];
		
		$e=$_POST['tl_evt_abt'];
		//$f=$_POST['tl_evt_inttar1'];
	$qry1="INSERT INTO events VALUES('$j','$a','$row3[0]','$x1','$b','$c','$d','Pending','$e')";
	$res1=mysqli_query($con,$qry1);
	
	if($res1)
		   { //echo "hel";
         $qry4='NO';
$qry5='NO';	
$qry6='NO';
$qry7='NO';
$qry8='NO';
$qry9='NO';
$qry10='NO';
$qry11='NO';
if($_POST['tl_evt_inttar11']=='SCSE')
	$qry4='YES';
if($_POST['tl_evt_inttar12']=='SITE')
	$qry5='YES';
if($_POST['tl_evt_inttar13']=='SENSE')
	$qry6='YES';
if($_POST['tl_evt_inttar14']=='SELECT1')
	$qry7='YES';
if($_POST['tl_evt_inttar15']=='SMBS')
	$qry8='YES';
if($_POST['tl_evt_inttar16']=='SBST')
	$qry9='YES';
if($_POST['tl_evt_inttar17']=='SAS')
	$qry10='YES';
if($_POST['tl_evt_inttar18']=='SSL1')
	$qry11='YES';
$qry12="INSERT INTO intended VALUES('$j','$qry4','$qry5','$qry6','$qry7','$qry8','$qry9','$qry10','$qry11')";
$res12=mysqli_query($con,$qry12);

	 
	   ?>
	   <script lang="javascript">
		   window.location.href="tl_Event_History.php";
		   </script>
	<?php
			}
	else 
		{
		//	echo "hey";
			?>
			
			<script lang="javascript">
		   window.location.href="tl_New_Event.php";
		   </script>

		   <?php 
		//echo "hey";
		}
	}
	
?>