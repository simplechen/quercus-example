<?php 
$conn = mysql_connect("127.0.0.1","root","123456");
var_dump($conn);
mysql_select_db("yiche");

$res= mysql_query("select * from brand_info where 1");
while($row=mysql_fetch_array($res,1)){
	print_r($row);
}
mysql_close($conn);
?>
