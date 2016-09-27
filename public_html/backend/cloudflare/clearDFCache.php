<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 9/27/16
 * Time: 1:02 AM
 */

$url = "https://api.cloudflare.com/client/v4/zones/0be7b1daf9a7e94109bb013e1ef0e455/purge_cache";
$ch = curl_init();
$json = json_encode(array("purge_everything" => true));


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "X-Auth-Email: iamnobodyrandom@yahoo.com",
    "X-Auth-Key: " . getenv('CLOUDFLARE_API_TOKEN'),
    "Content-Type: application/json"
));
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result);
curl_close($ch);

var_dump($result);