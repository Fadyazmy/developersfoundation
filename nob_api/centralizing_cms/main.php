<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/8/16
 * Time: 1:31 AM
 */

$linkTo = $_GET['item'];
switch ($linkTo) {
    case 1:
        echo "<div>article one in here</div>";
        break;
    case 2:
        echo "<div>article one in here</div>";
        break;
    default:
        echo "<div>default page</div>";
}