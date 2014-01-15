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

$client->setAssertionCredentials(new Google_AssertionCredentials(
  SERVICE_ACCOUNT_NAME,
  'https://www.google.com/calendar/feeds/' . CAL_ID . '/private/full/',
  $key)
);

//view reservations
$client->setUseObjects(true); 
$cal = new Google_CalendarService($client);

date_default_timezone_set('America/Los_Angeles');
$checkstart = date(DATE_ATOM,strtotime('now'));
$checkend = date(DATE_ATOM,strtotime('+1 month'));
/*$params = array('maxResults' => 10,
        'timeMax' => $checkend,
        'timeMin' => $checkstart);
*/
$params = array('timeMin' => $checkstart);
$eventlist = $cal->events->listEvents(CAL_ID, $params);
echo "<form action='delete.php' method='post'>";
foreach ($eventlist->getItems() as $event){
  echo "<br><input type='checkbox' name='check_list[]' value=".$event->getId()."/>".$event->getSummary();
  $edate = explode("T", $event->getStart()->getDateTime());
  $etime = explode("=", $edate[1]);
  echo "<br>Date:".$edate[0]."<br>";
  echo "Time:".$etime[0]."<br>";
}
echo "<br><br><input type='submit' value='Delete'>";

// Update the cached access token
if ($client->getAccessToken()) {
  $_SESSION['token'] = $client->getAccessToken();
}

?>
