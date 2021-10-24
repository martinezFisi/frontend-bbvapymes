<?php
error_reporting(0);

$url='http://pymesbbva-env-1.eba-mec6ejc3.sa-east-1.elasticbeanstalk.com/pymesbbva/api/v1/sms/token/send/51922480953';
$data='';
function httpPost($url, $data){
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    echo true;
}

httpPost('http://pymesbbva-env-1.eba-mec6ejc3.sa-east-1.elasticbeanstalk.com/pymesbbva/api/v1/sms/token/send/51922480953', $data);
?>
