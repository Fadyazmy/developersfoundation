<?php
//Enable the option to display any parsing errors.
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
//Require other files.
require_once 'GraphServiceAccessHelper.php';
require_once 'Settings.php';
require_once 'AuthorizationHelperForGraph.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Edit User
    </title>
</head>
<body>
<?php
// If this was not a post back show the edit user form
if (!isset($_POST['submit'])) {
    $user = GraphServiceAccessHelper::getMeEntry();
    echo('<form method="post" action="' . /*$_SERVER['PHP_SELF']*/ 'EditUser.php' . '">');
    echo('<table>');
    echo('<tr><td><b>Display Name:</b></td><td><input type="text" size="20" maxlength="100" name="dname" value="' . $user->{'displayName'} . '"></td></tr>');
    echo('<tr><td><b>Mail Alias:</b></td><td><input type="text" size="20" maxlength="15" name="alias" value="' . $user->{'mailNickname'} . '"></td></tr>');
    echo('<tr><td><b>User Principal Name:</b></td><td><input type="text" size="20" maxlength="100" name="userPrincipalName" value="' . $user->{'userPrincipalName'} . '"></td></tr>');
    echo('<tr><td><b>City:</b></td><td><input type="text" size="20" maxlength="100" name="city" value="' . $user->{'city'} . '"></td></tr>');
    echo('<tr><td><b>Account Enabled:</b></td></tr>');
    $checkedTrue = '';
    $checkedFalse = '';
    if ($user->{'accountEnabled'} == true) {
        $checkedTrue = 'checked';
    } else {
        $checkedFalse = 'checked';
    }
    echo('<tr><td><b>True:</b></td><td><input type="radio" value="True" name="accountenabled"' . $checkedTrue . '></td></tr>');
    echo('<tr><td><b>False:</b></td><td><input type="radio" value="False" name="accountenabled"' . $checkedFalse . '></td></tr>');
    echo('<tr><td><input type="submit" value="submit" name="submit"></td></tr>');
    echo('</table>');
    echo('</form>');
} else {

    // Validate that the inputs are non-empty.
    if ((empty($_POST["dname"])) or (empty($_POST["alias"])) or (empty($_POST["accountenabled"])) or (empty($_POST["userPrincipalName"])) or (empty($_POST["city"]))) {
        echo('<p>One of the required fields is empty. Please go back to <a href="EditUser.php">Update User</a></p>');
    } else {
        //collect the form parameters which will be set in the case this was a post back.
        $displayName = $_POST["dname"];
        $alias = $_POST["alias"];
        $userPrincipalName = $_POST["userPrincipalName"];
        $accountEnabled = $_POST["accountenabled"];
        $city = $_POST["city"];

        $userEntryInput = array(
            'displayName' => $displayName,
            'userPrincipalName' => $userPrincipalName,
            'mailNickname' => $alias,
            'accountEnabled' => $accountEnabled,
            'city' => $city
        );

        // Create the user and display a message
        $user = GraphServiceAccessHelper::updateMeEntry($userEntryInput);

        //Check to see if we got back an error.
        if (!empty($user->{'odata.error'})) {
            $message = $user->{'odata.error'}->{'message'};
            echo('<p>User update failed. Service returned error:<b>' . $message->{'value'} . '</b> Please go back to <a href="DisplayME.php">to view your information</a></p>');
        } else {
            echo('<p>');
            echo('<b>Updated the User with the following information:</b>');
            echo('<br/>');
            echo('<b>Display Name:   </b>' . $displayName);
            echo('<br/>');
            echo('<b>User Principal Name:  </b>' . $userPrincipalName);
            echo('<br/>');
            echo('<b>City:  </b>' . $city);
            echo('<br/>');
            echo('<b>Account Enabled:  </b>');
            echo($accountEnabled ? 'true' : 'false');
            echo('<br/> <br/>');
            echo('You can go back to <a href="DisplayME.php">My Information</a> to continue managing your information.');
            echo('</p>');
        }
    }
}

?>
</body>
</html>
