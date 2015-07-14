<?php
include("header2.php");
include("TL_menu_list.php");
?>
<section id="tl_editmember">
<form action="tl_edit_member_id.php" method="post">
<fieldset>
<legend>Edit Member</legend>
Team Member User ID:<input type="password" id="tl_member_reg" name="tl_member_reg"><br>
<input type="submit" id="tl_editmember_submit"><br>
</fieldset>
</section>
<?php
include("footer.php");?>