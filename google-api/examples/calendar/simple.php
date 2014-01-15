<?php
require_once '../../src/Google_Client.php';
require_once '../../src/contrib/Google_CalendarService.php';
session_start();

$client = new Google_Client();
$client->setApplicationName("Google Calendar PHP Starter Application");

// Visit https://code.google.com/apis/console?api=calendar to generate your
// client id, client secret, and to register your redirect uri.
	$client->setClientId('149011620228-avjjf22rsv4hte1sujki8lk16ghionru.apps.googleusercontent.com');
 	$client->setClientSecret('GgUBq7bzG4aQrLEK8SL2RAM2');
 	$client->setRedirectUri(urlencode('https://mang-2-res.resnet.ucsd.edu/~whiteyingfa/reservations.php'));
 	$client->setDeveloperKey('AIzaSyA3XxhCB8NQ-b6erlat_pBGrXxYXp-UDr0');

$at= '{"access_token":"' . $access_token . '",' .
      '"token_type":"Bearer",' .
      '"expires_in":3600,' .
      '"refresh_token":"' . $refresh_token . '",'.
      '"created":' . time() . '}';

     $client->setAccessToken($at);

$cal = new Google_CalendarService($client);
if (isset($_GET['logout'])) {
  unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
  $calList = $cal->calendarList->listCalendarList();
  print "<h1>Calendar List</h1><pre>" . print_r($calList, true) . "</pre>";

$_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
  print "<a class='login' href='$authUrl'>Connect Me!</a>";
}


?>