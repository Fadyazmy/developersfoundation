<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/29/16
 * Time: 9:04 PM
 */

require_once '../../vendor/autoload.php';
require_once 'globalSettings.php';
// Parse endpoints
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParseRole;

//Enable the option to display any parsing errors.
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
//Require other files.
require_once 'windows-ad/GraphServiceAccessHelper.php';
require_once 'windows-ad/Settings.php';
require_once 'windows-ad/AuthorizationHelperForGraph.php';

if (!isset($_SESSION['access_token']) || $_SESSION['access_token'] == NULL) {
    header('Location:windows-ad/Authorize.php');
    exit();
}

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

$user = GraphServiceAccessHelper::getMeEntry();
//$userPic = GraphServiceAccessHelper::getMePhoto();
try {
    $parseUser = ParseUser::getCurrentUser();
    if (!$parseUser) {
        error_log("User is not authed with parse :(");
        // Reattempt to auth
        header('Location:windows-ad/Authorize.php');
        exit();
    }
} catch (Exception $ex) {
    // Probably somehow got to this page without parse login
    require_once 'parse-db/login.php';
}

// TODO: Get available items with current user credentials

// Find all available websites and put into side bar (with get links)
$websiteQuery = new ParseQuery("Website");
$websiteQuery->ascending("nickname");
try {
    $results = $websiteQuery->find();
    echo "Server got " . count($results);
    // The object was retrieved successfully.
    for ($i = 0; $i < count($results); $i++) {
        $object = $results[$i];
        echo "<!--";
        echo $object->getObjectId() . ' - ' . $object->get('nickname');
        echo "-->";
    }
} catch (ParseException $ex) {
    // The object was not retrieved successfully.
    // error is a ParseException with an error code and message.
    echo "<!--";
    echo "SERVER ERROR: " . $ex->getMessage();
    echo "-->";
}