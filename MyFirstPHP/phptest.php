/*
 * Created on 2014-7-26
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 <html>
<head>
  <title>PHP Test</title>
</head>
<body>
<?php
echo "<p>Hello World</p>";
echo $_SERVER["HTTP_USER_AGENT"];

$x=5; // ȫ�ֱ���
$y=10;

function myTest()
{
global $x; // ����ȫ�ֱ���
echo "<p>Test variables inside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
}

myTest();

echo "<p>Test variables outside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
echo "<br>";

function myStaticTest()
{
static $z=0;
echo "Static Var z is:$z";
echo "<br>";
$z++;
}

myStaticTest();
myStaticTest();
myStaticTest();

$cars = array("Volve","BMW","Toyota");
echo "first car is {$cars[0]}";
echo "<br>";
print "second car is $cars[1]";

echo "<p><b>Variables define</b></p>";
var_dump($x);
var_dump($cars);
$bTrue = true;
var_dump($bTrue);

echo "<p><b>Example 1:</b></p>";
echo "<p>define a constant variable!</p>";
define ("ConstVar","www.w3school.com",true);
echo constvar;
echo "<br>";
echo ConstVar;
echo "<br>";

$age = array("Peter"=>"20", "Davis"=>"22", "Kelly"=>"18");
echo "Peter is ", $age["Peter"]," years old";
echo "<br>";
foreach ($age as $tmp=>$x_value)
{
	echo "Key is ".$tmp.",Value is ".$x_value;
	echo "<br>";
}

function GlobalAdd()
{
	$GLOBALS['xy'] = $GLOBALS['x'] + $GLOBALS['y'];
}

GlobalAdd();
echo "Global var x=",$x," add global var y=",$y," is:", $xy;

echo "<p><b>Example 2:</b></p>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "Remote_addr:",$_SERVER['REMOTE_ADDR'];
echo "<br>";

echo "<p><b>Example 3:</b></p>";
echo "���ǵ�", __line__,"��";
echo "<br>";
echo "���ļ�λ��", __file__;
echo "<br>";
echo "���ļ�λ��'", __DIR__,"'Ŀ¼��";
echo "<br>";
?>
</body>
</html>
<?php
echo "���ǵ�", __line__,"��";
echo "<br>";
?>
