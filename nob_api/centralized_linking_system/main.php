<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/8/16
 * Time: 1:26 AM
 */

$linkTo = $_GET['link'];
switch ($linkTo) {
    case "facebook":
        $url = "https://www.facebook.com/westerncsc/?fref=ts";
        break;
    case "blog":
    case "rss":
    case "medium":
        $url = "https://medium.com/@WesternCyberSecurity";
        break;
    case "github":
        $url = "https://github.com/WesternCyber";
        break;
    case "home":
    default:
        $url = "http://westerncyber.club";
}

header("Location: " . $url);
exit;
?>