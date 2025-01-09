<?
//$ads_txt = "https://data.adinplay.com/ads/paperio9.com/ads.txt";

 $ads_txt = "https://data.adinplay.com/ads/mains.io/ads.txt";

//$gtag  = "google.com, pub-7233485374797646, DIRECT, f08c47fec0942fa0";

header("Content-Type: text/plain");
//echo $gtag."\n";
$fh = fopen($ads_txt,'r');
while ($line = fgets($fh)) {
	
  echo($line);
  //echo "\n";
}
fclose($fh);
?>

