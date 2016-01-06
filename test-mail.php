<?php
mail("jbs321@gmail.com", "{$_REQUEST['name']} - New Contact - Portfolio",$_REQUEST['email'] .' /n '. $_REQUEST['msg']);
?>