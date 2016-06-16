<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/8/16
 * Time: 1:17 AM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require '../../../vendor/autoload.php'; // MAKE SURE THIS POINTS TO YOUR COMPOSER VENDOR FOLDER
$getPost = (array)json_decode(file_get_contents('php://input'));

$sendgrid = new SendGrid('SUB IN A REAL API KEY HERE');
$email = new SendGrid\Email();

$email
    ->addTo($getPost['sendTo'])
    ->addToName($getPost['toName'])
    //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves. We are now using our Web API parameters instead of the X-SMTPAPI header. What this means is that if you call `addTo()` multiple times for an email, **ONE** email will be sent with each email address visible to everyone.
    ->setFrom($getPost['sendFrom'])
    ->setFromName($getPost['fromName'])
    ->setSubject($getPost['subject'])
    ->setText($getPost['msg'])
    ->setHtml($getPost['msgHTML']);

try {
    $sendgrid->send($email);
    echo json_encode(array('success' => true, 'message' => "done"));
} catch (\SendGrid\Exception $e) {
    $err = $e->getCode() . "\n";
    foreach ($e->getErrors() as $er) {
        $err = $err . $er . "\n";
    }
    echo json_encode(array('success' => false, 'message' => $err));
}