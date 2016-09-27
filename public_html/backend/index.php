<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/22/16
 * Time: 11:09 PM
 */

require_once "phpHeader.php";

require_once "htmlHeader.php";
?>

    <!--
<?php
    /*echo('<tr><td>Display Name:</td>');
    echo('<td>' . $user->{'displayName'} . '</td>');
    echo('</tr><tr><td>User Principal Name:</td>');
    echo('<td>' . $user->{'userPrincipalName'} . '</td>');
    echo('</tr><tr><td>Object ID:</td>');
    echo('<td>' . $user->{'objectId'} . '</td>');
    echo('</tr><tr><td>Immutable ID:</td>');
    echo('<td>' . $user->{'immutableId'} . '</td>');
    echo('</tr><tr><td>Street:</td>');
    echo('<td>' . $user->{'streetAddress'} . '</td>');
    echo('</tr><tr><td>Delivery Location:</td>');
    echo('<td>' . $user->{'physicalDeliveryOfficeName'} . '</td>');
    echo('</tr><tr><td>Usage Location:</td>');
    echo('<td>' . $user->{'usageLocation'} . '</td>');
    echo('</tr><tr><td>City:</td>');
    echo('<td>' . $user->{'city'} . '</td>');
    echo('</tr><tr><td>Country:</td>');
    echo('<td>' . $user->{'country'} . '</td>');
    echo('</tr><tr><td>Department:</td>');
    echo('<td>' . $user->{'department'} . '</td>');
    echo('</tr><tr><td>Job Title:</td>');
    echo('<td>' . $user->{'jobTitle'} . '</td>');
    echo('</tr><tr><td>Mail:</td>');
    echo('<td>' . $user->{'mail'} . '</td>');

    // proxyAddresses property is a collection
    echo('</tr><tr><td>Proxy Addresses: </td>');
    if (!is_null($user->{'proxyAddresses'})) {
        foreach ($user->{'proxyAddresses'} as $proxy) {
            echo('<td>' . $proxy . '</td>');
        }
    }

    // otherMails property is a collection
    echo('</tr><tr><td>Other Email Addresses:</td>');
    if (!is_null($user->{'otherMails'})) {
        foreach ($user->{'otherMails'} as $address) {
            echo('<td>' . $address . '</td>');
        }
    }

    // assignedLicenses property is a collection
    echo('</tr><tr><td>Licenses </td>');
    if (!is_null($user->{'assignedLicenses'})) {
        foreach ($user->{'assignedLicenses'} as $userLicense) {
            echo('</tr><tr><td>Sku ID: </td>');
            echo('<td>' . $userLicense->{'skuId'} . '</td>');

            if (!is_null($userLicense->{'disabledPlans'})) {
                echo('</tr><tr><td>Disabled Plans: </td>');
                foreach ($userLicense->{'disabledPlans'} as $disabledPlans) {
                    echo('<td>' . $disabledPlans . '</td>');
                }
            }

        }
    }

    echo('</tr><tr><td>Mobile:</td>');
    echo('<td>' . $user->{'mobile'} . '</td>');
    echo('</tr><tr><td>Password Policies:</td>');
    echo('<td>' . $user->{'passwordPolicies'} . '</td>');
    echo('</tr><tr><td>Surname:</td>');
    echo('<td>' . $user->{'surname'} . '</td>');
    echo('</tr><tr><td>telephone Number:</td>');
    echo('<td>' . $user->{'telephoneNumber'} . '</td>');
    echo('</tr><tr><td>Account Enabled:</td>');
    echo('<td>' . $user->{'accountEnabled'} . '</td>');
    echo('<tr><td>User Type:</td>');
    echo('<td>' . $user->{'userType'} . '</td></tr>');
    $editLinkValue = "windows-ad/EditUser.php";
    echo('<tr/><tr><td><a href=\'' . $editLinkValue . '\'>' . 'Edit User' . '</a></td></tr>');*/
    ?>
-->

    <!-- page content -->
    <div class="right_col" role="main">
        <button onclick="clearCF();">Clear CF Cache</button>
        <script>
            function clearCF() {
                $.ajax({
                    url: 'cloudflare/clearDFCache.php',
                    type: 'GET',
                    success: function (msg) {
                        console.log(msg);
                        $('button').innerHTML = "Done :D";
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            }
        </script>
        <br/>
        <div>
            Available client sites to edit
            <ul>
                <?php echo $websiteMenu; ?>
            </ul>
        </div>
        <div>
            Please see <a href="sampleSite.php">sample site</a> for how to fetch data from db.
        </div>
    </div>
    <!-- /page content -->

<?php
require_once "htmlFooter.php";
?>