<?php

require_once "Client.php";
require_once "Service/Calendar.php";

$apiClient = new apiClient();
$apiClient->setUseObjects(true);
$service = new apiCalendarService($apiClient);

if (isset($_SESSION['oauth_access_token'])) {
  $apiClient->setAccessToken($_SESSION['oauth_access_token']);
} else {
  $token = $apiClient->authenticate();
  $_SESSION['oauth_access_token'] = $token;
}
?>