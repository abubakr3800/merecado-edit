<?php
// path to your JSON file
$file = 'api.json'; 
// put the content of the file in a variable
$data = file_get_contents($file); 
// JSON decode
$obj = json_decode($data); 
// display the name of the first person
print_r($obj);

echo "<br><br><br><br><br>";

// **************
$clients = array(
    2 => array(
      'name' => 'newcar',
      'fav_car' => 'vanto'
    ),
    5=> array(
      'name' => 'livecar',
      'fav_car' => 'varna'
    )
  );
//   var_dump($clients);

  $data_found_key = array_search('63978f6296c5b', array_column($obj, 'key'));
  echo $data_found_key;
  unset($obj[$data_found_key]);

//   print_r($obj[3]);
//   echo $obj[$data_found_key]->key;


print_r($obj);
