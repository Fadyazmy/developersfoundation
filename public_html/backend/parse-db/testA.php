<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 10:29 PM
 */

require_once "../../../vendor/autoload.php";
$ParseAppID = "developers-foundation-db";
$ParseMasterKey = "Abcd1234";
$ParseServer = "https://developers-foundation-db.herokuapp.com/parse";
session_start();

print_r($_SESSION);

use Parse\ParseClient;
use Parse\ParseException;
use Parse\ParseUser;
use Parse\ParseSessionStorage;

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);
ParseClient::setStorage( new ParseSessionStorage() );

$un = "abc@abc.com";
$pw = "test";

// Try get old user first
try {
    $parseUser = ParseUser::logIn($un, $pw);
    // Do stuff after successful login.
} catch (ParseException $error) {
    // If failed user probably does not exist, then creating the user
    $parseUser = new ParseUser();
    $parseUser->set("username", $un);
    $parseUser->set("password", $pw); // Not secure but ok lol
    $parseUser->set("email", $un);

    try {
        $parseUser->signUp();
        // Hooray! Let them use the app now.

        $parseUser = ParseUser::logIn($un, $pw);
    } catch (ParseException $ex) {
        // Show the error message somewhere and let the user try again.
        error_log("Error: " . $ex->getCode() . " " . $ex->getMessage());
    }
}

