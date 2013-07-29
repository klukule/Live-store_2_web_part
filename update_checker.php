<?php include('connect.php'); 

	$sql="SELECT * FROM updates ORDER BY id DESC";
    $result=mysql_query($sql);
    $count=mysql_num_rows($result);
?>
Latest version: <version>2.0.0</version>
<br>
Changelog:<br>
<changelog>
//LiveStore v2.0.0
//- complete code rewrite
//- copmplete web rewrite
//- complete everythink rewrite :D

//LiveStore v1.0.2
//- server part redirected to new website
//- stability
//- bugfixes
//- complete redesign of main page
//LiveStore v1.0.1
//- login added
//- registration added
//- fully new design
//- Added logging function
//- toons and toons of new thinks :D

//LiveStore v1.0.0
//- initial version
</changelog>