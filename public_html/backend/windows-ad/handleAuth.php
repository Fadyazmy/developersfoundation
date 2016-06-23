<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 1:23 AM
 */

session_start();
//Require other files.
require_once 'Settings.php';
require_once 'AuthorizationHelperForGraph.php';
require_once 'displayME.php';
if (!isset($_GET['code'])) {
    header('Location:Authorize.php');
} else {
    AuthorizationHelperForAADGraphService::GetAuthenticationHeaderFor3LeggedFlow($_GET['code']);
    header('Location:DisplayME.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title></title>
</head>
<body>
</body>
</html>