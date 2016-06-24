<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 8:09 PM
 */

//Enable the option to display any parsing errors.
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
//Require other files.
require_once 'windows-ad/GraphServiceAccessHelper.php';
require_once 'windows-ad/Settings.php';
require_once 'windows-ad/AuthorizationHelperForGraph.php';

if (!isset($_SESSION['access_token']) || $_SESSION['access_token'] == NULL) {
    header('Location:../windows-ad/Authorize.php');
}

$user = GraphServiceAccessHelper::getMeEntry();

require_once 'header.php';

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

$website = new ParseObject("Website");

$website->set("url", "https://nigerian.herokuapp.com");
$website->set("name", "Nigerian Association of London and Area");
$website->set("nickname", "Nigerian");
$website->set("developer", "Harrison Chow");

try {
    $website->save();
    echo 'New object created with objectId: ' . $website->getObjectId();
} catch (ParseException $ex) {
    echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}

