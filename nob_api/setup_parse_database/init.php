<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 8:09 PM
 */

require_once '../../../vendor/autoload.php';
require_once '../globalSettings.php';

use Parse\ParseClient;

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

use Parse\ParseObject;
use Parse\ParseException;
use Parse\ParseUser;

$website = new ParseObject("Website");

$website->set("url", "abc");
$website->set("playerName", "Sean Plott");
$website->set("cheatMode", false);

try {
    $website->save();
    echo 'New object created with objectId: ' . $website->getObjectId();
} catch (ParseException $ex) {
    echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}