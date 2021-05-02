<?php

/* https://api.telegram.org/bot1769744254:AAEKy9bdr9x1xGW5tRW_oGyTaWa7eLbPUqU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
// $email = $_POST['user_email'];
$token = "1769744254:AAEKy9bdr9x1xGW5tRW_oGyTaWa7eLbPUqU";
$chat_id = "-477464553";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Результаты'=> 
  // 'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>