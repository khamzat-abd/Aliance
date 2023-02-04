<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_tel = htmlspecialchars($_POST["usertel"]);

$token = "5803930607:AAGQhJ2i9x9ud-YVn_vcxGhMjvfngXO5Vo4";
$chat_id = "-835599173";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_tel
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}