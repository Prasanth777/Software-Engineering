<?php
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

if(isset($_POST['dh_name'])&&isset($_POST['dh_email'])&&isset($_POST['dh_dept'])&&isset($_POST['dh_desig'])&&isset($_POST['dh_cabin'])&&isset($_POST['dh_cont']))
{
	$a1=$_POST['dh_name'];
	$a2=$_POST['dh_email'];
	$a3=$_POST['dh_dept'];
	$a4=$_POST['dh_desig'];
	$a5=$_POST['dh_cabin'];
	$a6=$_POST['dh_cont'];
	$a7=$_SESSION['name'];
$qry = 'UPDATE department_profile SET Name="$a1",Email_Id="$a2",Department="$a3",Designation="$a4",Cabin="$a5",Contact="$a6"  where User_Id="$a7"';
           $res = mysqli_query($con, $qry);
           if($res==TRUE)
			   echo "Profile Updated Successfully";
else if($res==FALSE)
{	echo "Error in Updating!!!";
			header("Location : dh_Edit_Profile.php");
}
}
?>