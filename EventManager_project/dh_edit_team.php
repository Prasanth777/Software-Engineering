<?php
include("header1.php");
include("DH_menu_list.php");

?>
<section id="dh_editteam">
<form action="dh_edit_team_id.php" method="post">
<fieldset>
<legend>Edit Team</legend>
Team ID:<input type="text" id="dh_team_editid" name="dh_team_editid"><br>
<input type="submit" id="dh_editteam_submit"><br>
</fieldset>
</form>
</section>
<?php 
include("footer.php");
?>