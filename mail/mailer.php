<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 4/14/16
 * Time: 10:32 PM
 */

$sendgrid = new SendGrid('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');
$email = new SendGrid\Email();

$email
    ->addTo($_POST['email'])
    //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves. We are now using our Web API parameters instead of the X-SMTPAPI header. What this means is that if you call `addTo()` multiple times for an email, **ONE** email will be sent with each email address visible to everyone.
    ->setFrom('hello@developersfoundation.ca')
    ->setSubject('Test email')
    ->setText($_POST['comments'])
    ->setHtml($_POST['comments'])
;

$sendgrid->send($email);