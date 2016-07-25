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

$parseUser = ParseUser::getCurrentUser();
if (!$parseUser) {
    // Then try get old user first
    try {
        $parseUser = ParseUser::logIn($windowsUser->{'userPrincipalName'}, $windowsUser->{'objectId'});
        // Do stuff after successful login.
    } catch (ParseException $error) {
        // If failed user probably does not exist, then creating the user
        $parseUser = new ParseUser();
        $parseUser->set("username", $windowsUser->{'userPrincipalName'});
        $parseUser->set("password", $windowsUser->{'objectId'}); // Not secure but ok lol
        $parseUser->set("email", $windowsUser->{'userPrincipalName'});
        $parseUser->setACL(new ParseACL($parseUser));

        try {
            $parseUser->signUp();
            // Hooray! Let them use the app now.

            $parseUser = ParseUser::logIn($windowsUser->{'userPrincipalName'}, $windowsUser->{'objectId'});
        } catch (ParseException $ex) {
            // Show the error message somewhere and let the user try again.
            error_log("Error: " . $ex->getCode() . " " . $ex->getMessage());
        }
    }
}

// Heroku stores to /tmp/ but need to find a way to fetch it to store into db
//$localFilePath = "/tmp/myFile.txt";
$localFilePath = "test.png";
$file = ParseFile::createFromFile($localFilePath, "test.png");
$file->save();
// The file has been saved to Parse and now has a URL.
$url = $file->getURL();
echo $url;