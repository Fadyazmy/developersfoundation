<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 10/24/16
 * Time: 12:06 AM
 */

$account_sid = '<AccountSid>';
$auth_token = '<AuthToken>';
$client = new Services_Twilio($account_sid, $auth_token);

$client->account->messages->create(
    array(
        'To' => '<ToNumber>',
        'From' => '<FromNumber>',
        'Body' => '<BodyText>',
    )
);