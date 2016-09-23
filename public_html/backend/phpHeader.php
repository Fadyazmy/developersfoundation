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

$websiteMenu = "";
try {
    $results = $websiteQuery->find();
    for ($i = 0; $i < count($results); $i++) {
        $website = $results[$i];
        $websiteMenu = $websiteMenu . '<li><a href="website.php?website=' . $website->getObjectId() . '">' . $website->get('nickname') . '</a></li>';
    }
} catch (ParseException $ex) {
    echo "<!--";
    echo "SERVER ERROR: " . $ex->getMessage();
    echo "-->";
    $websiteMenu = '<li><a href="javascript:void(0)">Sorry Server Error</a></li>';
}


//require_once "htmlHeader.php";