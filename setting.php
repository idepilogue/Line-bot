<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "1595703340";
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
