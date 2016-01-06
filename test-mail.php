<?php
print (mail("jbs321@gmail.com", "{$_REQUEST['name']} - New Contact - Portfolio",$_REQUEST['email'] .' /n '. $_REQUEST['msg'])) ? "Email successfully sent" : print "An error occured" ;