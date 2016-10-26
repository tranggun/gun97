<?php
include 'curl.php';
include 'config.php';
$token = file_get_contents("".$linktoken.""); 
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$id_like.'/feed?access_token='.$token.'&limit=1'),true); //Limit Id 1 Status
for($i=0;$i<count($feed[data]);$i++){ // Parse ID
$id = $feed[data][$i][id];  
} 
$curllike = explode("_", $id);
$iduser= $curllike[0];
$idstt= $curllike[1];    
if($sllike <= $limitlike){
login("http://like.vipvui.vn/login1.php?user=".$token."","null");
#echo grab_page("http://www.autolikesgroups.com/home.php?type=custom");
echo post_data("http://like.vipvui.vn/vipvuivn1.php?type=status","id=".$idstt."&submit");
?>