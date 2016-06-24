<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 1:23 AM
 */

require_once '../../../vendor/autoload.php';

//Require other files.
require_once 'GraphServiceAccessHelper.php';
require_once 'Settings.php';
require_once 'AuthorizationHelperForGraph.php';
//require_once 'DisplayME.php';

if (!isset($_GET['code'])) {
    header('Location:Authorize.php');
} else {
    // Authed windows-ad
    AuthorizationHelperForAADGraphService::GetAuthenticationHeaderFor3LeggedFlow($_GET['code']);

    // Now auth parse-db
    $windowsUser = GraphServiceAccessHelper::getMeEntry();
    require_once '../parse-db/login.php';

    header('Location:../index.php');
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