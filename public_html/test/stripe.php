<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 1/29/17
 * Time: 6:27 PM
 */

include_once "../../vendor/autoload.php";

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_aGnS14vnHRLMFYc9Jlzb4SPT");

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
$token = $_POST['stripeToken'];
//$token = $getPost['stripeToken'];

echo $token;

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
    "amount" => 1000,
    "currency" => "cad",
    "description" => "Example charge",
    "source" => $token,
));