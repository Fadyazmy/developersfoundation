<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 8/16/16
 * Time: 2:24 PM
 */

require_once '../../vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseException;

$ParseAppID = "developers-foundation-db";
$ParseMasterKey = "Abcd1234";
$ParseServer = "https://developers-foundation-db.herokuapp.com/parse";
ParseClient::initialize($ParseAppID, '', $ParseMasterKey);
ParseClient::setServerURL($ParseServer);

$query = new ParseQuery("Website");
$theWebsite = $query->get("5Itqbrk0en");

header('Content-type: text/plain');
echo '<pre>';
print_r($theWebsite);
echo '</pre>';
