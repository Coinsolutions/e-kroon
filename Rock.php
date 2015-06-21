<?php
If(!$_SESSION){
session_start();
$aeg = $_GET['aeg'];
$prefix = $_GET['prefix'];
$ip = $_GET['ip'];
$_SESSION['mine_60'] = $_SESSIO['mine_60']+1;
}
if($_SESSION['mine_60'] = 60){
$file = './rock.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $prefix."\n";
// Write the contents back to the file
file_put_contents($file, $current);
}
$file="rock.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);
If(!$_SESSION['linecount']){
$url="http://twojointsontheroad.info/e-
kroon/coinbase.php?mine=".$linecount."&rock=".$prefix;
$ch = curl_init();
curl_setopt( $ch, CURLOPT_USERAGENT, 
"Im_Rock" );
curl_setopt( $ch, CURLOPT_URL, $url );  
$content = curl_exec( $ch );
$response = curl_getinfo( $ch );
curl_close ( $ch );
}
$_SESSION['linecount'] = $linecount;


?>
