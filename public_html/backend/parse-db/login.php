<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 8:39 PM
 */

// NOTE: THIS PAGE IS NOT TO BE CALLED DIRECTLY
ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

// Login only works after authorized with windows-ad
if (!isset($windowsUser)) {
    header('Location:../windows-ad/Authorize.php');
}

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

