<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 8:03 PM
 */

$ParseAppID = "developers-foundation-db";
$ParseMasterKey = "Abcd1234";
$ParseServer = "https://developers-foundation-db.herokuapp.com/parse";

// Parse endpoints
use Parse\ParseClient;
use Parse\ParseUser;
use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParseRole;