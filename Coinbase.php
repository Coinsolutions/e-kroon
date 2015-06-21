<?php 
start_session();
if($_SESSION['rock']= 'martti'){
$file = './coinbase.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $_SESSION['rock']."\n";
// Write the contents back to the file
file_put_contents($file, $current);
}


?>
