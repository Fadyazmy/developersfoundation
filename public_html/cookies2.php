<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/3/17
 * Time: 9:00 PM
 */

if (!$_COOKIE['nobAuth']) {
    echo "You are not authorized.";
} else {
    echo "You are good :)";
}