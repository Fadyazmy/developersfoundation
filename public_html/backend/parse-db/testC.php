<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 10:59 PM
 */

session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
$_SESSION['count']++;
echo "Hello #" . $_SESSION['count'];