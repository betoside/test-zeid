<?php


// Import the Postmark Client Class:
// require_once('vendor/autoload.php');
require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

$client = new PostmarkClient("ce74bb7b-41ba-4f87-8607-a03e46d55947");
$fromEmail = "contact@zeidlercapital.com";
$toEmail = "betoside@gmail.com";
$subject = "Hello from Postmark";
$htmlBody = "<strong>Hello</strong> dear Postmark user.";
$textBody = "Hello dear Postmark user.";
$tag = "example-email-tag";
$trackOpens = true;
$trackLinks = "None";
$messageStream = "outbound";

// Send an email:
$sendResult = $client->sendEmail(
  $fromEmail,
  $toEmail,
  $subject,
  $htmlBody,
  $textBody,
  $tag,
  $trackOpens,
  NULL, // Reply To
  NULL, // CC
  NULL, // BCC
  NULL, // Header array
  NULL, // Attachment array
  $trackLinks,
  NULL, // Metadata array
  $messageStream
);

?>