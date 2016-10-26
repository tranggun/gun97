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
login("http://www.myfbliker.com/login.php?user=".$token."","null");
#login("http://adf.ly/1Rse8H","null");
echo post_data("http://www.myfbliker.com/home.php?type=custom","id=".$idstt."&submit=Submit&selector=400");
}
?>