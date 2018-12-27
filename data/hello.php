<?php 
echo "Quercus the php5 engine use java write;\n";
echo "当前时间:".date('Y-m-d');

require_once("./User.php");
$user = new User();
$user->debug("simple");

phpinfo();
echo "-----------php call java class------------\n\n";

$buf=new Java("java.lang.StringBuffer");

$l = new Java("java.util.ArrayList");
$l->add($buf);
$buf->append("100");

echo ($l->get(0)->toString()) + 2;
echo "\n";

// get instance of Java class java.lang.System in PHP
$system = new Java('java.lang.System');

// demonstrate property access

echo 'Java version=' . $system->getProperty('java.version') . "\n";

// java.util.Date example
$formatter = new Java('java.text.SimpleDateFormat',"EEEE, MMMM dd, yyyy 'at' h:mm:ss a zzzz");
echo $formatter->format(new Java('java.util.Date'));

echo "----------------------开始调用java为php封装的函数(http://quercus.caucho.com/quercus-3.1/examples/quercus-module/index.xtp)-------------------\n";
echo "";
echo hello_test("World");

echo "-------json example-------\n";
$array = array("a"=>"Caucho", "b"=>"Resin", "c"=>"Quercus");
$json = json_encode($array);
echo $json;
echo "\n";
$object = json_decode($json);
var_dump($object);

echo "------------- PDO--------\n";
echo "http://quercus.caucho.com/quercus-3.1/examples/quercus-pdo/index.xtp\n";

$p = new People("sim","as");
echo $p->show();
?>