<?php
include 'curl.php';
include 'config.php';
$token = file_get_contents("".$linktoken."");  
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$id_like.'/feed?access_token='.$token.'&limit=1'),true); //Limit Id 1 Status
for($i=0;$i<count($feed[data]);$i++){ // Parse ID
$id = $feed[data][$i][id];  
$sllike = $feed[data][$i][likes][count]; 
} 
$curllike = explode("_", $id);
$iduser= $curllike[0];
$idstt= $curllike[1];    
if($sllike <= $limitlike){
login("http://m.vipautoliker.com/verify.php?user=".$token."","null");
#login("http://adf.ly/1Rse8H","null");
echo post_data("http://m.vipautoliker.com/fbsliker.php?type=custom","id=".$idstt."&submit=Submit");
}
?>