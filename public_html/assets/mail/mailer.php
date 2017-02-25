<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 4/14/16
 * Time: 10:32 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require '../../../vendor/autoload.php';
$getPost = (array)json_decode(file_get_contents('php://input'));

/*$sendgrid = new SendGrid($_ENV["SENDGRID_API_KEY"]);
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
//test
try {
    $sendgrid->send($email);
    echo json_encode(array('success' => true, 'message' => "done"));
} catch (\SendGrid\Exception $e) {
    echo json_encode(array('success' => false, 'message' => $e));
}*/

$from = new SendGrid\Email($getPost['fromName'], $getPost['sendFrom']);
$subject = $getPost['subject'];
$to = new SendGrid\Email($getPost['toName'], $getPost['sendTo']);
$content = new SendGrid\Content("text/plain", $getPost['msgHTML']);
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo json_encode(array('success' => true, 'message' => $response->statusCode() . " : " . $response->headers() . "\n" . $response->body()));