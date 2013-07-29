<?php
    require 'connect.php';
error_reporting(E_ALL ^ E_NOTICE);
    $myusername=$_POST['un'];
    $mypassword=$_POST['ps'];

    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);

    $sql="SELECT * FROM accounts WHERE username='$myusername' and password='$mypassword'";
	
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
    if($count==1)
        echo $myusername;
    else 
        echo "Denied"
?> 