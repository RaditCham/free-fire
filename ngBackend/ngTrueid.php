<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api-flashcode.xyz/FFID/".$id);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $res = curl_exec($ch);
    curl_close($ch);
    echo $res;
}else{
    echo "No Paramater Detected";
}
?>