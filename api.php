<?php


require 'config.php';
$servers = 0;
//Lets decode the JSON but only if its defined in the config!
if (!empty($server1)) {
    $json = file_get_contents("$server1");
    $data = json_decode($json, true);
    $servers++;
   if ($data['is_online'] == 1) {
    $server1online = 1; }
    else {
    $server1online = 0; 
    }
} else { $server1online = 0; 
}
if (!empty($server2)) {
    $json = file_get_contents("$server2");
    $data2 = json_decode($json, true);
    $servers++;
    if ($data2['is_online'] == 1) {
    $server2online = 1; }
    else {
    	$server2online = 0; 
    }
} else {$server2online = 0; }
if (!empty($server3)) {
    $json = file_get_contents("$server3");
    $data3 = json_decode($json, true);
    $servers++;
    if ($data3['is_online'] == 1) {
    $server3online = 1; }
    else {
    	$server3online = 0; 
    }
} else {$server3online = 0; }
if (!empty($server4)) {
    $json = file_get_contents("$server4");
    $data4 = json_decode($json, true);
    $servers++;
    if ($data4['is_online'] == 1) {
    $server4online = 1; }
    else {
    	$server4online = 0; 
    }
} else {$server4online = 0; }
if (!empty($server5)) {
    $json = file_get_contents("$server5");
    $data5 = json_decode($json, true);
    $servers++;
    if ($data5['is_online'] == 1) {
    $server5online = 1; }
    else {
    	$server5online = 0; 
    }
} else {$server5online = 0; }
$thetitle = $communityname;