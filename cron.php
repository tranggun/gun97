<?php
include'config.php';
linkdm(''.$domain.'/ok.php');
linkdm(''.$domain.'/ok2.php');
linkdm(''.$domain.'/ok3.php');
linkdm(''.$domain.'/ok4.php');
linkdm(''.$domain.'/ok5.php');
linkdm(''.$domain.'/ok6.php');
linkdm(''.$domain.'/ok7.php');
linkdm(''.$domain.'/ok8.php');
linkdm(''.$domain.'/ok9.php');
linkdm(''.$domain.'/ok10.php');
linkdm(''.$domain.'/ok11.php');
linkdm(''.$domain.'/vipvui.php');
function linkdm($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>