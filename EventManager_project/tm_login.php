<?php 

session_start();
//echo $_SESSION["uid"];
if(isset($_POST['login_user']) && isset($_POST['pwd']) )
{
$user= $_POST['login_user'];
$pas= $_POST['pwd'];
}
$con = mysqli_connect("localhost","root", "", "event manager");
 if (!$con)
  {
    die('Could not connect: ' . mysqli_error());

    exit();
  }
  if(!empty($_REQUEST['mode']))
      {
           //echo "database connection successful";
           
           $qry = "SELECT * FROM team_members WHERE memid = '$user'";
           $res = mysqli_query($con, $qry);
           
           $row=  mysqli_fetch_assoc($res);
           
        
           if($row)
           {
               
               if($row['teammempass']==$pas)
               {
                   
                   
                   $_SESSION['name'] = $row['memid'];
             
                   ?>
                   <script language='javascript'>
                   window.location.href="TM_menu.php";
                   </script>
                    <?php
               }
               else 
               {
                   ?>
                    <script language='javascript'>
                    alert("Wrong Password");
					window.location.href="index.php";
                    </script>
                    <?php
               }
           }
 else {
     ?>
                        <script language='javascript'>
                         alert("Wrong Username");
                         window.location.href="index.php";
                         </script>
						 <?php
		}
	  }
	  ?>
<center><div class="login1">
<h1><strong>Member Login</strong></h1>
<form action="tm_login.php" method="post">
<fieldset>
<p><input type="hidden" name="mode" value="1" /></p>
<p><input type="text" required placeholder="Username" id="login_user" name="login_user" autofocus="true" ></p>
<p><input type="password" required placeholder="Password" id="login_pass" name="pwd"></p>
<p ><a href="#" >Forgot Password?</a></p>
<p><input type="submit" value="Login"></p>
</fieldset>
</form>
</div>
</center>
<div class="something">
</div>
