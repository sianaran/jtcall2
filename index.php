<?php
$input=file_get_contents('php://input');
$data=json_decode($input);

$chatId = $data->message->chat->id;
$text = $data->message->text;

$telegramtoken = "1474434301:AAEuCjbRgID56XcvzdeWuxlGW-34Zl5-RT8"; //
//$telegramchatid = "-380293919"; //ซีรีย์ตอนใหม่
function sendMessagetelegram($chatId, $text, $telegramtoken) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
?>
