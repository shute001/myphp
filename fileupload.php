<?php

//������ļ���ʽ��׺
$allowedExts = array (
	"gif",
	"jpeg",
	"jpg",
	"png"
);
//���ļ�����.���ָ�����ַ���temp������
$temp = explode(".", $_FILES["file"]["name"]);
//��ȡ�������һλ��Ҳ�����ļ����ĺ�׺
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

