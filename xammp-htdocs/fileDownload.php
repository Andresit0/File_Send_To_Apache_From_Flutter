<?php

$filename = $_REQUEST['fileName'];

$fullPath = realpath(__DIR__ . '/file/' . $filename);

if(file_exists($fullPath)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename="'.basename($fullPath).'"');
header('Content-Length: ' . filesize($fullPath));
header('Pragma: public');

flush();
readfile($fullPath);
die();
}


?>
      

      

    