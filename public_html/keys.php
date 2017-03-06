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
$pubKey = openssl_pkey_get_public("../key/public.pub");
$pubKeyData = openssl_pkey_get_details($pubKey);

print $pubKeyData;