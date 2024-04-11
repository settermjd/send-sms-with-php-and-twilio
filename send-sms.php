<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Twilio\Rest\Client;

$twilio = new Client(
    $_SERVER["TWILIO_ACCOUNT_SID"],
    $_SERVER["TWILIO_AUTH_TOKEN"]
);

$message = $twilio
    ->messages
    ->create($_SERVER["RECIPIENT"],
        [
            "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
            "from" => $_SERVER["SENDER"]
        ]
    );

echo match($message->status) {
    'accepted', 'scheduled', 'sent', 'sending', 'delivered' => "The SMS was sent successfully.\n",
    default => 'Something went wrong sending the SMS'
};