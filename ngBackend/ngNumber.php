<?php 
if(isset($_GET['hp'])) {
    $hp = $_GET['hp'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.iwanster.com/system/operator/?hp=".$hp);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result,true);
    if($res['provider'] == "" || $res['provider'] == null){
    echo "NotFound";
    }else{
    echo $res['provider'];
    }
}else{
    echo "No Paramater Detected";
}

?>