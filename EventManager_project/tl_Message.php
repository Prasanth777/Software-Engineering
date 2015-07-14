<?php
include("header2.php");
include("TL_menu_list.php");


?>
<section id="tl_mess_sec">
<form action="message2.php" method="post">
<fieldset>
<legend>Messages</legend> 
<label> To: </label> &nbsp;
<input type="text"id="tl_mess_to" name="tl_mess_to" size="60" placeholder="Enter the user Id you wish to send message"><br />
<label>Message:</label> &nbsp;
<textarea rows="5" cols="60" id="tl_mess_txtarea" name="tl_mess_txtarea" placeholder="Enter the messsage here"></textarea><br />
<input type="submit" id="tl_mess_submit"><br/>
</fieldset>
</form>
</section>
<?php
include("footer.php");?>