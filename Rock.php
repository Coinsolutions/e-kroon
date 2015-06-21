<?php
session_start();
 header('Access-Control-Allow-Origin: *');
$aeg = $_GET['aeg'];
$prefix = $_GET['prefix'];
$ip = $_GET['ip'];
$_SESSION['mine_60'] = $_SESSION['mine_60'] +1;
if($_SESSION['mine_60'] = 60){
$file = './rock.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $aeg."; miner :".$prefix.";ip:".$ip.";\n";
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

If($linecount = 60){
$url="http://twojointsontheroad.info/e-kroon/coinbase.php?mine=60&rock=martti";
$ch = curl_init();
curl_setopt( $ch, CURLOPT_USERAGENT, "Im_Rock" );
curl_setopt( $ch, CURLOPT_URL, $url );  
$content = curl_exec( $ch );
$response = curl_getinfo( $ch );
curl_close ( $ch );
}

?>
