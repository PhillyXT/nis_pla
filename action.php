<?php
$ttime = date("d.m.Y");
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("mysqlsvr30.world4you.com","playrat","B0@ooKe");//database connection
mysql_select_db("playratdb2");




//inserting data order
mysql_query("INSERT INTO xmas2k12 (timestamp, fullplayrname, playrmail) VALUES ('$ttime', '$tname', '$tmail')");

//declare in the order variable
if (isset($_POST['submit'])) {
	// form is submmitted
	header('location: http://www.playr.at/xmas2012/thx.php');
}
?>