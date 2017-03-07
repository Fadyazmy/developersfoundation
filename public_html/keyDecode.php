<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/7/17
 * Time: 11:24 AM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET' || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "http")){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

$masterKey = $_ENV['NOB_API'];
$crypt = $_POST['CRYPT'];
$prvKey = openssl_pkey_get_private(file_get_contents("../key/private.pem"),$masterKey);

openssl_private_decrypt($crypt, $decrypted, $prvKey);
echo $decrypted;

openssl_free_key($prvKey);
