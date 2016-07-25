<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/25/16
 * Time: 4:47 PM
 */

// THIS CODE IS PURELY TO TEST IF THE DB CAN STORE FILES AND REUSE. SINCE HEROKU DOES NOT ALLOW PERSISTENT STORAGE

require_once "../../../vendor/autoload.php";
use Parse\ParseFile;
use Parse\ParseUser;

session_start();

try {
    $currentUser = ParseUser::getCurrentUser();
    if (!$currentUser) {
        require_once "login.php";
    }
} catch (Exception $ex) {
    require_once "login.php";
}

// Heroku stores to /tmp/ but need to find a way to fetch it to store into db
//$localFilePath = "/tmp/myFile.txt";
$localFilePath = "test.png";
$file = ParseFile::createFromFile($localFilePath, "test.png");
$file->save();
// The file has been saved to Parse and now has a URL.
$url = $file->getURL();
echo $url;