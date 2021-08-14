<?php


$myData = 
"user=".$user.
"&pass=".$pass.
"&id=".$id.
"&nick=".$nick.
"&level=".$level.
"&tier=".$tier.
"&ep=".$ep.
"&hp=".$hp.

$c4 = curl_init();
curl_setopt($c4, CURLOPT_URL, $myUrl);
curl_setopt($c4, CURLOPT_POST, 1);
curl_setopt($c4, CURLOPT_POSTFIELDS, $myData);
curl_setopt($c4, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($c4, CURLOPT_COOKIEJAR, getcwd()."/jancok.txt");
curl_setopt($c4, CURLOPT_COOKIEFILE, getcwd()."/jancok.txt");   
curl_setopt($c4, CURLOPT_HEADER, 0);
curl_setopt($c4, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($c4);
curl_close($c4);


?>

