 <?php
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST,OPTIONS'); 
header('Cache-Control: no-cache');
header('Pragma: no-cache');
//(0);
session_start();

require_once __DIR__ . '/lib/google/vendor/autoload.php';
define('OAUTH2_CLIENT_ID', '802598773397-sv5qso0pre9uhfrrd3fvc6n0hnt75jgd.apps.googleusercontent.com');
define('OAUTH2_CLIENT_SECRET', 'HM_T-zzkNyH7___uMsnFZHRR');
$key = file_get_contents('token.txt');
$data = json_decode(file_get_contents('php://input'), true);
if(sizeof($data) > 0){
// Client init
$client = new Google_Client();
$client->setClientId(OAUTH2_CLIENT_ID);
$client->setAccessType('offline');
$client->setApprovalPrompt('force');
$client->setAccessToken($key);
$client->setClientSecret(OAUTH2_CLIENT_SECRET);
/**
     * Check to see if our access token has expired. If so, get a new one and save it to file for future use.
     */
    if($client->isAccessTokenExpired()) {
        $newToken = json_encode($client->getAccessToken());
        $client->refreshToken($newToken->refresh_token);
       file_put_contents('token.txt', json_encode($client->getAccessToken()));
    }
$client->setScopes('https://www.googleapis.com/auth/spreadsheets');
// Define an object that will be used to make all API requests.
// Check if an auth token exists for the required scopes
$tokenSessionKey = 'token-' . $client->prepareScopes();
if (isset($_SESSION[$tokenSessionKey])) {
  $client->setAccessToken($_SESSION[$tokenSessionKey]);
}
if ($client->getAccessToken()) {
//$client = getClient();
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1uwOIIBfdAWr4_qqs7e_W3-rHOmMvriS0h1hkRY4XZXk';
$values = array(
    array( 																		
         ($data["email"] !="")?$data["email"]:" ",
         ($data["type"] !="")?$data["type"]:" ",
     
 // Cell values ...
    )
    // Additional rows ...
);

$range = 'Sheet1!A2:B';
$body = new Google_Service_Sheets_ValueRange(array(
  'values' => $values
));
$params = array(
  'valueInputOption' => "RAW"
);

$result = $service->spreadsheets_values->append($spreadsheetId, $range,
    $body, $params);
echo json_encode($result);
} elseif (OAUTH2_CLIENT_ID == 'REPLACE_ME') {
    $OAUTH2_CLIENT_ID = OAUTH2_CLIENT_ID;
  $htmlBody = <<<END
  <h3>Client Credentials Required</h3>
  <p>
    You need to set <code>\$OAUTH2_CLIENT_ID</code> and
    <code>\$OAUTH2_CLIENT_ID</code> before proceeding.
  <p>
END;
} else {
  // If the user hasn't authorized the app, initiate the OAuth flow
  $state = mt_rand();
  $client->setState($state);
  $_SESSION['state'] = $state;

  $authUrl = $client->createAuthUrl();
  $htmlBody = <<<END
  <h3>Authorization Required</h3>
  <p>You need to <a href="$authUrl">authorize access</a> before proceeding.<p>
END;
}
}
?>
