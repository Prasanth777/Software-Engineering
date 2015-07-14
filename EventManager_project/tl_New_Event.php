<?php
include("header2.php");
include("TL_menu_list.php");
error_reporting(0);
?>

<section id="tl_newevent">
<form action="temp4.php" method="post">
<fieldset>
<legend>Form</legend>
Event Name:<input type="text" id="tl_evt_name" name="tl_evt_name" size="60"><br /><br />
Date:<input type="date" id="tl_evt_date" name="tl_evt_date"><br /><br />
Time:<input type="time" id="tl_evt_time" name="tl_evt_time"><br /><br />
Venue:<input type="text" id="tl_evt_venue" name="tl_evt_venue" size="60"><br /><br />

About the Event:<input type="text" id="tl_evt_url" name="tl_evt_abt" size="60"><br /><br />
Intended Targets:<input type="checkbox" id="tl_evt_inttar1" name="tl_evt_inttar11" value="SCSE" size="60">SCSE&nbsp;
<input type="checkbox" id="tl_evt_inttar2" name="tl_evt_inttar12" value="SITE" size="60">SITE&nbsp;
<input type="checkbox" id="tl_evt_inttar3" name="tl_evt_inttar13" value="SENSE" size="60">SENSE&nbsp;
<input type="checkbox" id="tl_evt_inttar4" name="tl_evt_inttar14" value="SELECT1" size="60">SELECT&nbsp;<br/>
<input type="checkbox" id="tl_evt_inttar5" name="tl_evt_inttar15" value="SMBS" size="60">SMBS&nbsp;
<input type="checkbox" id="tl_evt_inttar6" name="tl_evt_inttar16" value="SBST" size="60">SBST&nbsp;
<input type="checkbox" id="tl_evt_inttar7" name="tl_evt_inttar17" value="SAS" size="60">SAS&nbsp;
<input type="checkbox" id="tl_evt_inttar8" name="tl_evt_inttar18" value="SSL1" size="60" >SSL&nbsp;<br/>
<input type="submit" value="submit" size="20"><br /><br />
</fieldset>
</form>
</section>
<?php
include("footer.php");?>
