<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);
$userId = $bot->getUserId();
$bot->pushText($userId, 'Hello Simple Text!');


