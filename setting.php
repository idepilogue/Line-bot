<?php

class Setting {
	public function getChannelAccessToken(){
$channelAccessToken = "kb/TNducgmz0+3HRUjP42bkLpr2M7pgt1CNRswKR3PqNBuIthoS5X3QZuQgaSpo9Ln91NHwayW/KQzYJCHbydMpJDVP3l/BkvoC57qYEBdj5By0l7oRAd2Cle6MX69qGboY6k5R5TvBDfhJx5BsqlgdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "ea5e1ddfc18327994a346d2bc9ce56ed";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
?>
