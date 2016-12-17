
 <?php
require 'config.php';
$servers = 0;
//Lets decode the JSON but only if its defined in the config!
if (!empty($server1)) {
$json=file_get_contents("$server1");
$data =  json_decode($json, true);
$servers++;
} else { //display nothing
}
if (!empty($server2)) {
$json=file_get_contents("$server2");
$data2 =  json_decode($json, true);
$servers++;
} else {
}
if (!empty($server3)) {
$json=file_get_contents("$server3");
$data3 =  json_decode($json, true);
$servers++;
} else {
}
if (!empty($server4)) {
$json=file_get_contents("$server4");
$data4 =  json_decode($json, true);
$servers++;
} else {
}
if (!empty($server5)) {
$json=file_get_contents("$server5");
$data5 =  json_decode($json, true);
$servers++;
} else {
}





 $thetitle = $communityname;