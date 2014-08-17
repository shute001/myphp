<?php

//允许的文件格式后缀
$allowedExts = array (
	"gif",
	"jpeg",
	"jpg",
	"png"
);
//把文件名以.作分隔符拆分放入temp数组中
$temp = explode(".", $_FILES["file"]["name"]);
//获取数组最后一位，也就是文件名的后缀
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") ||
	($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/pjpeg") ||
	($_FILES["file"]["type"] == "image/x-png") || ($_FILES["file"]["type"] == "image/png")) &&
	($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts)) {
	if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} else {
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Stored in: " . $_FILES["file"]["tmp_name"];

		if (file_exists("upload/" . $_FILES["file"]["name"])) {
			echo $_FILES["file"]["name"] . " already exists. ";
		} else {
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
			echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		}
	}
} else {
	echo "Invalid file, only can upload image";
}
?>

