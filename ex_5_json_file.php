<?php
header("Content-Type: application/json");
$folder = $_POST["folder"];
//$folder = "gallery";
$jsonData = '{';
$dir = $folder."/";
$dirHandle = opendir($dir);
$i = 0;
while ($file = readdir($dirHandle)){
	if(!is_dir($file) && strpos($file, '.jpg')){
		$i++;
		$src = "$dir$file"; // it look like gallery/unknownfile.jpg
$jsonData .= '"img'.$i.'":{ "num":"'.$i.'","src":"'.$src.'","name":"'.$file.'"},';
	}
}
closedir($dirHandle);
$jsonData = chop($jsonData, ","); //chop function for remving last comma 
$jsonData .= '}';
echo $jsonData;
?>