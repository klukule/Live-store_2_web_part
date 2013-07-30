<?php include('connect.php'); 
    $gameid=$_GET['id'];
	$sql="SELECT * FROM games WHERE gameid='$gameid'";
    $result=mysql_query($sql);
	$num=mysql_numrows($result);
	$i=0;while ($i < $num) {
	$name=mysql_result($result,$i,"name");
	$img_url=mysql_result($result,$i,"img_url");
	$data=mysql_result($result,$i,"popisek");
	//$download_url=mysql_result($result,$i,"download_url");
	echo "<name>".$name."</name></br>";
	echo "<img_url>".$img_url."</img_url></br>";
	echo "<data>".$data."</data></br>";
	//echo "<download_url>"$name"</download_url>";
	$i++;}
?>