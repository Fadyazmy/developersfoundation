<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 10:29 PM
 */

require_once "../../../vendor/autoload.php";
require_once '../globalSettings.php';
session_start();

use Parse\ParseClient;
use Parse\ParseException;
use Parse\ParseUser;

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);
//ParseClient::setStorage( new ParseSessionStorage() );

$windowsUser->{'userPrincipalName'} = "test";
$windowsUser->{'objectId'} = "abc";

// Try get old user first
try {
    $parseUser = ParseUser::logIn($windowsUser->{'userPrincipalName'}, $windowsUser->{'objectId'});
    // Do stuff after successful login.
} catch (ParseException $error) {
    // If failed user probably does not exist, then creating the user
    $parseUser = new ParseUser();
    $parseUser->set("username", $windowsUser->{'userPrincipalName'});
    $parseUser->set("password", $windowsUser->{'objectId'}); // Not secure but ok lol
    $parseUser->set("email", $windowsUser->{'userPrincipalName'});

    try {
        $parseUser->signUp();
        // Hooray! Let them use the app now.

        $parseUser = ParseUser::logIn($windowsUser->{'userPrincipalName'}, $windowsUser->{'objectId'});
    } catch (ParseException $ex) {
        // Show the error message somewhere and let the user try again.
        error_log("Error: " . $ex->getCode() . " " . $ex->getMessage());
    }
}

