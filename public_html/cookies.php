<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/3/17
 * Time: 9:00 PM
 */

$userAuthed = false;
$_SESSION['nobAuth'] = false;
$_COOKIE['nobAuth'] = false;

if ($_POST['user'] != '' && $_POST['user'] != null) {
    if ($_POST['user'] == "THE_USER" && $_POST['password'] == "THE_PASSWORD") {
        $userAuthed = true;
        $_SESSION['nobAuth'] = true;
        $_COOKIE['nobAuth'] = true;
    }
}

?>

<html>
<body>
<?php
if (!$userAuthed) {
    ?>
    <form method="POST" action="cookies.php">
        <input type="text" name="user" id="user">
        <input type="password" name="password" id="password">
        <input type="submit" value="SUBMIT">
    </form>
    <?php
} else {
    ?>
    <p>You are authed, try clicking on this <a href="cookies2.php">link</a>.</p>
    <?php
}
?>
</body>
</html>
