<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

echo "-- welcome to testing -- <br>";
echo "-- Unit test provides fast way to test small piece of functionality -- <br>";
echo "-- When you writ test, you don't want to be touching database or API --<br>";

//tutorial source
//http://www.adamboother.com/blog/automatically-posting-to-a-facebook-page-using-the-facebook-sdk-v5-for-php-facebook-api/

// use Facebook\Facebook;

$fb = new Facebook\Facebook([
 'app_id' => '275849832816962', //Connect app id
 // 'app_id' => '145634995501895', //Graph AIP Exploxer
 'app_secret' => '834b4f8f3df335703ddc2ca2275cb838',
 'default_graph_version' => 'v2.2',
]);

$linkData = [
 'link' => 'www.easypunjabityping.com',
 'message' => 'Type in English and Get in Punjabi for FREE'
];
//For Posting on my Profile:
//$pageAccessToken ='EAAD64ktL4UIBALmxIGcRQXcOmTzg6Jm9ikoSVMs1oD7wjt7l8kow8JbIUU21ZCaBjXnciJfvB8tfsK0M4iGZCCMDf4OpaWIzBJlu7iZCgJnTZAXVFHFTHwcZAZCtNf1H5HnElJ1ZBjT7f4hCNv564Oo';//Connect

//For Posting on Easy Bengali Typing
// $pageAccessToken ='EAAD64ktL4UIBANAW5RSD0tEaLrA3PoKGxoYZAKsLQfbiObXvLY1yNZCu7QWbrK3x9c08BODgIQGF4NxZCoo1iPV3YpOZBSnCpE0eh55ZASd5IAY7sFmWZC1aZAH0BrHSZBoYpmUUy8mYNcooNHFMnXAQjgCQFKj8ZCJMZD';//Connect Easy Bengali Tuyping

//For Posting on Type in Nepali - Easy Nepali Typing
// $pageAccessToken = "EAAD64ktL4UIBANtouZAJMEZCqgfbrwn8rlishAQR4ZAzczcoRiTMSBfZCtvzPzTrNy1orGtmOizvdD25PxUIR4FMIXMKSJW2xxlydh5GkL4w388FlbuaijS79vCXSgRZBoZAADvCx9FGccf7ufoa8UhLaHiUj6kO0ZD"; //For posting on Type in Nepali - Easy Nepali Typing

//Easy Hindi Typing
$pageAccessToken = "EAAD64ktL4UIBAEzWFNXi4Op0iaWs96yd1olHol2sLPlBgM4u56RuZAnh7aoXF6EfI9ZBlrZCpnP7gNcJROFTSZAgTZAPN6co2RBhPfLxWLFUzNZAs76lAGkkPQV0yXzQIm4SrVQ1OlvBr59DS7KOqT2WXA3oNZBQDstK3ogFzVO4AZDZD";

//For Any New, Follow steps below:
//1. https://developers.facebook.com/tools/explorer/275849832816962
//2. select Connect
//3. Select page for e.g. Type in Nepali - Easy Nepali Typing
//4. Click on (i) before the access token, pop up will open and click on "Open in Access Token Tool"
//5. Click on Extend Access Token
//6. Copy the token
//7. $pageAccessToken = "EAAD64ktL4UIBANtouZAJMEZCqgfbrwn8rlishAQR4ZAzczcoRiTMSBfZCtvzPzTrNy1orGtmOizvdD25PxUIR4FMIXMKSJW2xxlydh5GkL4w388FlbuaijS79vCXSgRZBoZAADvCx9FGccf7ufoa8UhLaHiUj6kO0ZD"; //For posting on Type in Nepali - Easy Nepali Typing

try {
 $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 echo 'Graph returned an error: '.$e->getMessage();
 exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 echo 'Facebook SDK returned an error: '.$e->getMessage();
 exit;
}
$graphNode = $response->getGraphNode();

var_dump($graphNode);
?>
