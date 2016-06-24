<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 9:16 PM
 */

if (file_exists('../../../vendor/autoload.php')) {
    require_once '../../../vendor/autoload.php';
    require_once '../globalSettings.php';
} else {
    require_once '../../vendor/autoload.php';
    require_once 'globalSettings.php';
}

use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseException;
use Parse\ParseUser;
