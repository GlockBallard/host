<?php
require_once "vendor/autoload.php";
$bot = new \TelegramBot\Api\BotApi('5030820867:AAFypfm_k-s4q_lq9f2ZnhDd01aaiW5NhUU');

$fullname = $_POST["personal"];
$phonenumber = $_POST["phone"];
$email = $_POST["email"];
$countrycity = $_POST["country"];
$adress = $_POST["address"];
if (isset($_POST)) {
    $info_text = "👤 ФИО: $fullname
📞 Номер телефона: $phonenumber
📩 Email: $email
🏙 Страна, Город: $countrycity
📬 Адрес: $adress";
}
$bot->sendMessage(599022447, $info_text);
?>