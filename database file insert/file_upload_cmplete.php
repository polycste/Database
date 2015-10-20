<?php
$uploaddir = "assignment/";
$path=$_FILES['userfile']['name'];//previous page input value(userfile), file name(name)
echo "Given path ",$path,"<br/>";

$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo "upload ",$uploadfile,"<br/>";

$FileType = pathinfo($uploadfile,PATHINFO_EXTENSION);
echo "file type ",$FileType,"<br/>";

if($FileType=='php' || $FileType=='txt' || $FileType=='html')
{
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    	echo "File is valid, and was successfully uploaded.\n";
	} else {
    	echo "file upload is not possible ";
	}
}
else
{
	echo "file extension is not valid";
}
?>