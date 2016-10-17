<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 7/10/16
 * Time: 12:48 PM
 */

session_start();
try {

    session_destroy();
} finally {
    header("Location: https://developers.foundation/");
}
