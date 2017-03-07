<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 2/25/17
 * Time: 4:18 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET' || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "http")){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

$masterKey = $_ENV['NOB_API'];
$pubKey = openssl_pkey_get_public(file_get_contents("../key/public.pub"));

openssl_public_encrypt("lol this is a test", $encrypted, $pubKey);
echo $encrypted;
//echo base64_encode($encrypted);
