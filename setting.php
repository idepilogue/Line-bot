<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "1595703340";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "3c981c557d2984b8cb048ea1fdc807d2";
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
