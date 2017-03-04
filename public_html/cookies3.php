<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/3/17
 * Time: 9:48 PM
 */

session_start();

echo $_SESSION['nobAuth'] . "\n";
echo $_COOKIE['nobAuth'] . "\n";

if ($_COOKIE['nobAuth'] != "true") {
    exit(1);
} else {
    echo "You are good :)";
}

?>

<html>
<body>
SOme secret info.
</body>
</html>
