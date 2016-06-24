<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 8:09 PM
 */

require '../../../vendor/autoload.php';
require '../globalSettings.php';

use Parse\ParseClient;

ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

use Parse\ParseObject;

$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "bar");
$testObject->save();