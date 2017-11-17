<?php
header("Content-Type: application/json");
$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$json_data = '{ "obj1":{"property1": "'.$var1.'", "property2": "'.$var2.'"} }';
echo $json_data;
?>