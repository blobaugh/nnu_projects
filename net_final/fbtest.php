<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: Sir Gecko Development Group
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook-platform/php/facebook.php';

$appapikey = '2e7db37290aec51b3ea9c00ff86d69e8';
$appsecret = '6c458da9cb3949434a62cceb678f3f42';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 25);
foreach ($friends as $friend) {
  echo "<br>$friend";
}
echo "</p>";