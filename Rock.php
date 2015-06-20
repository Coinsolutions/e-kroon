<?php
 header('Access-Control-Allow-Origin: *');
$aeg = $_GET['aeg'];
$prefix = $_GET['prefix'];
$ip = $_GET['ip'];

$file = './rock.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $aeg."; miner :".$prefix.";ip:".$ip.";\n";
// Write the contents back to the file
file_put_contents($file, $current);

?>
