<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 2/25/17
 * Time: 4:18 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

$masterKey = $_POST[];