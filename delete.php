<?php
session_start();
if ((!isset($_SESSION['logged-in']))){
  echo "<script>location.replace(\"login.html\");</script>";
}
error_reporting(E_ERROR | E_PARSE);

require_once './google-api/src/Google_Client.php';
require_once './google-api/src/contrib/Google_CalendarService.php';

// Set your client id, service account name, and the path to your private key.
// For more information about obtaining these keys, visit:
// https://developers.google.com/console/help/#service_accounts
const CLIENT_ID = '1008297730734-8r5dchmunmk0sejh4k0l39paih4dk5uj.apps.googleusercontent.com';
const SERVICE_ACCOUNT_NAME = '1008297730734-8r5dchmunmk0sejh4k0l39paih4dk5uj@developer.gserviceaccount.com';

// Make sure you keep your key.p12 file in a secure location, and isn't
// readable by others.
const KEY_FILE = '9a4635f8858236680fc947a7c4bcbbb426fdfa3d-privatekey.p12';

const CAL_ID = 'od31imc8pbfs6n9mhiros5ff30@group.calendar.google.com';

$client = new Google_Client();
$client->setApplicationName("UCMom");

// Set your cached access token. Remember to replace $_SESSION with a
// real database or memcached.
//session_start();
if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

// Load the key in PKCS 12 format (you need to download this from the
// Google API Console when the service account was created.
$key = file_get_contents(KEY_FILE);
$client->setAssertionCredentials(new Google_AssertionCredentials(
    SERVICE_ACCOUNT_NAME,
    array('https://www.googleapis.com/auth/calendar'),
    $key)
);

$client->setClientId(CLIENT_ID);
//$service = new Google_CalendarService($client);

$client->setAssertionCredentials(new Google_AssertionCredentials(
  SERVICE_ACCOUNT_NAME,
  'https://www.google.com/calendar/feeds/' . CAL_ID . '/private/full/',
  $key)
);

$client->setUseObjects(true); 
$cal = new Google_CalendarService($client);
$eventlist = $cal->events->listEvents(CAL_ID);

if (!empty($_POST['check_list'])){
	foreach($_POST['check_list'] as $check){
		$cal->events->delete(CAL_ID, substr($check, 0, -1));
	}
}

if ($client->getAccessToken()) {
  $_SESSION['token'] = $client->getAccessToken();
}

echo "<script>location.replace(\"index.html\");</script>";

?>