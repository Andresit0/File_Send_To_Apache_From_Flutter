<?php

$data = $_REQUEST['image'];
$filename = $_REQUEST['name'];
$imagePath = __DIR__ . "/file/$filename";
$realFile = base64_decode($data);
file_put_contents($imagePath , $realFile);

echo 'true';

?>
