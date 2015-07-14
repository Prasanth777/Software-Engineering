<?php
include("header1.php");
include("DH_menu_list.php");


?>
<section id="dh_mess_sec">
<form action="message.php" method="post">
<fieldset>
<legend>Messages</legend> 
<label> To: </label> &nbsp;
<input type="text"id="dh_mess_to" name="dh_mess_to" size="60" placeholder="Enter the team lead user Id"><br />
<label>Message:</label> &nbsp;
<textarea rows="5" cols="60" id="dh_mess_txtarea" name="dh_mess_txtarea" placeholder="Enter the messsage here"></textarea><br />
<input type="submit" id="dh_mess_submit"><br/>
</fieldset>
</form>
</section>

<?php
include("footer.php");
?>
