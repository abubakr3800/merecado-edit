<?php
// include "config.php";

$dir = new DirectoryIterator(dirname(__FILE__) . "");
$fhexname ;
$i = 0;
foreach ($dir as $fileinfo) {
	$i += 1;
	if (!$fileinfo->isDot()) {
		$fhexname = $fileinfo->getFilename() ;
		$arr[$i] = array('file' => $fhexname , 'key' => uniqid() , 'count' => 0);
	}
}

echo json_encode($arr);
$myfile = fopen("api.json", "w") or die("Unable to open file!");
// echo fgets($myfile);
$txt = json_encode($arr);
fwrite($myfile, $txt);
fclose($myfile);

echo '<br>' .'<br>' .'<br>' .'<br>' .'<br>' ;

$secfiletext ="";
$secfile = fopen("api.json", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($secfile)) {
  echo fgets($secfile) ;
 $secfiletext .= $secfile;
}

echo '<br>' .'<br>' .'<br>' .'<br>' .'<br>' ;

// path to your JSON file
$file = 'api.json'; 
// put the content of the file in a variable
$data = file_get_contents($file); 
// JSON decode
$obj = json_decode($data); 
// display the name of the first person
print_r($obj) ;

exit;