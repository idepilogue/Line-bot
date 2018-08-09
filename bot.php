<?php
//created by Pol.Cpl khomsan khemthong
$access_token ='kb/TNducgmz0+3HRUjP42bkLpr2M7pgt1CNRswKR3PqNBuIthoS5X3QZuQgaSpo9Ln91NHwayW/KQzYJCHbydMpJDVP3l/BkvoC57qYEBdj5By0l7oRAd2Cle6MX69qGboY6k5R5TvBDfhJx5BsqlgdB04t89/1O/w1cDnyilFU=';


// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			//source
     			$userId = $event['source']['userId'];

			// Get replyToken
			$replyToken = $event['replyToken'];
	   		$receivetext = $event['message']['text'];

      			$processtext = 'Paow Bot'."\n";
			$processtext .= $receivetext;

		 	 // Build message to reply back
//	    		$messages = [
//	   		'type' => 'text',
//	    		'text' => $processtext
//	     		];
//
//			$url = 'https://api.line.me/v2/bot/message/reply';
//			$data = [
//			'replyToken' => $replyToken,
//			'messages' => [$messages],
//			];

      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n";


    }
  }
}
echo "OKK";

?>
