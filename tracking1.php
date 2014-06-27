<?php

$db_server = mysql_connect("127.0.0.1", "thomas", "opullentpig");
mysql_select_db("grapplerworld");
//date_default_timezone_set("Europe/London");
$time = date("Y-m-d h:i:sa");
echo $starttime;
//mysql_query("INSERT INTO tracking (page, time) VALUES (1, '" . $time . "')");

?>
