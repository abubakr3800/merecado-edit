<?php
$name = $_POST['name'];
$url = $_POST['url'];
$id = uniqid();

// echo $name;
// path to your JSON file
$file = '../merecado-qr/users.json'; 
// put the content of the file in a variable
$data = file_get_contents($file); 
print_r($data);
echo '<br><br><br><br>';

$encdata = json_decode($data);
print_r($encdata);
echo '<br><br><br><br>';


// 
class USERS
{
    public $redid;
    public $name;
    public $url;
}

$newuser = new USERS();
$newuser->name = $name;
$newuser->url = $url;
$newuser->redid = $id;

// $fullusers = array($encdata, $newuser);
// $fullusers = $encdata . $newuser;
$txt = array_push($encdata , $newuser);

// print_r($txt);
print_r($encdata);
// 

$myfile = fopen("../merecado-qr/users.json", "w") or die("Unable to open file!");
$txt = json_encode($encdata);
fwrite($myfile, $txt);
fclose($myfile);
// echo system("../merecado-qr/upgit.bat");

?>