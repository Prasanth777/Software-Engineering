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
$qry="SELECT * FROM events ";
$res=mysqli_query($con,$qry);

		
							?>


  <?php
 
$c=$_POST['app_event'];
			switch($c)
			{case "accept":{$a="Approved";

							break;}
			case "reject":{$a="Rejected";
			             
							break;}
			}
		 }
  ?>
	<td width="113" scope="col"><?php  echo $a?></td>
     </tr>						
  
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