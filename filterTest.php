<?php
$str = "abc";
$int = 323;

$int_options = array(
"options"=>array
(
"min_range"=>0,
"max_range"=>256
));

if(!filter_var($int, FILTER_VALIDATE_INT,$int_options))
{
	echo("Integer is not valid");
}
else
{
	echo("Integer is valid");
}
echo("<br>");

if(!filter_has_var(INPUT_POST, "url"))
{
echo("Input type does not exist");
}
else
{
$url = filter_input(INPUT_POST,
"url", FILTER_SANITIZE_URL);
}

?>