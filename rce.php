<?php
// Write proof to web-accessible location
$proof = "RCE Proof - Time: " . date('Y-m-d H:i:s') . 
         " - PHP: " . phpversion();
$file = '/var/www/html/proof.txt';
file_put_contents($file, $proof);

// Then access: http://159.65.36.161:8095/proof.txt
?>
