<?php
$path = 'userdata.json';
$array = json_decode(file_get_contents($path));
rsort($array);
$jsonString = json_encode($array);
echo $jsonString;

?>