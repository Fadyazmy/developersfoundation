<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 8:09 PM
 */

// ONLY REMOVE THIS WHEN YOU ARE SURE IT IS SAFE TO RUN
exit();

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require_once '../../../vendor/autoload.php';
require_once '../globalSettings.php';
// Parse endpoints
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParseRole;

//Enable the option to display any parsing errors.
/*error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
//Require other files.
require_once 'windows-ad/GraphServiceAccessHelper.php';
require_once 'windows-ad/Settings.php';
require_once 'windows-ad/AuthorizationHelperForGraph.php';

if (!isset($_SESSION['access_token']) || $_SESSION['access_token'] == NULL) {
    header('Location:../windows-ad/Authorize.php');
}

$windowsUser = GraphServiceAccessHelper::getMeEntry();*/

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

$roleACL2 = new ParseACL();
$roleACL2->setPublicReadAccess(true);
$role2 = ParseRole::createRole("Administrator", $roleACL2);
$myself = ParseUser::getCurrentUser();
//$role2->getUsers()->add($myself);
try {
    $role2->save();
    echo 'role2 ok';
} catch (ParseException $ex) {
    echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}

$roleACL = new ParseACL();
$roleACL->setPublicReadAccess(true);
$role = ParseRole::createRole("User", $roleACL);
$role->getRoles()->add($role2);
try {
    $role2->save();
    echo 'role1 ok';
} catch (ParseException $ex) {
    echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}

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

ParseACL::setDefaultACL(new ParseACL(), true);