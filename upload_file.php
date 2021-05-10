<?php

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "Upload file name: " . $_FILES["file"]["name"] . "<br>";
		echo "Doc type: " . $_FILES["file"]["type"] . "<br>";
		echo "Doc size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "temp location of Doc: " . $_FILES["file"]["tmp_name"] . "<br>";

		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " File already exists ";
		}
		else
		{

			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
			echo "File saved as: " . "upload/" . $_FILES["file"]["name"];
		}
	}
}
else
{
	echo "can not read file";
}
?>
