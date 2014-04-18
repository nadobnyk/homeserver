<?php
require_once $plugins_dir.'Google/src/Client.php';
require_once $plugins_dir.'Google/src/Service/Oauth2.php';
require_once $plugins_dir.'Google/src/Service/Calendar.php';
require_once $plugins_dir.'Google/src/Service/Drive.php';
require_once $plugins_dir.'Google/src/Service/YouTube.php';


$client = new Google_Client();
  $client->setApplicationName("Client_Library_Examples");
  $client->setDeveloperKey("AIzaSyB4NsOmiRY04-LE165BC32BxMH10infj0A");
  $service = new Google_Service_Books($client);
  $optParams = array('filter' => 'free-ebooks');
  $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

  foreach ($results as $item) {
    echo $item['volumeInfo']['title'], "<br /> \n";
  }
?>