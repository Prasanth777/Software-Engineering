<?php
include("header3.php");
include("TM_menu_list.php");

?>
<section id="tm_mess_sec">
<form action="message3.php" method="post">
<fieldset>
<legend>Messages</legend> 
<label> To: </label> &nbsp;
<input type="text"id="tm_mess_to" name="tm_mess_to" size="60" placeholder="Enter the user Id you wish to send message"><br />
<label>Message:</label> &nbsp;
<textarea rows="5" cols="60" id="tm_mess_txtarea" name="tm_mess_txtarea" placeholder="Enter the messsage here"></textarea><br />
<input type="submit" id="tm_mess_submit"><br/>
</fieldset>
</form>
</section>
<?php
include("footer.php");?>