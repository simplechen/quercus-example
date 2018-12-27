<?php 
// $conn = jndi_lookup("java:comp/env/jms/jms-connection-factory");

// $connn = mysql_connect("java:comp/env/jdbc/myDatabaseName");
$conn = mysql_connect("127.0.0.1","root","123456") or die(mysql_errno());
var_dump($conn);

 ?>