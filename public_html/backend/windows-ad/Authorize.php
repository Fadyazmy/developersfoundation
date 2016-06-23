<?php
    //Require other files.
    require_once 'Settings.php';
    require_once 'AuthorizationHelperForGraph.php';
    $authorizationURL = AuthorizationHelperForAADGraphService::getAuthorizatonURL();
    header( 'Location:'. $authorizationURL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>

