<?php
    // $token - токен созданого в телеграм бота
    // $chat_id - ID групового чата в котором находится бот
    // https://api.telegram.org/bot{$token}/getUpdates - ссылка для получения идентификатора чата (груповой чат начинается с минуса)
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $token = "825666007:AAE92NvjyBD23kCXof3AkUuRvcA7Yg6-N7c";

    $chat_id = "-321428527";
    $arr = array(
        'Имя: ' => $name,
        'Телефон: ' => $phone,
        'Email: ' => $email
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b>".$value."%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

    if($sendToTelegram) {
        echo '<h1>Сообщение отправлено!</h1>';
        return true;
    }
    else {
        echo '<h1>Сообщение не отправлено!</h1>';
    }
?>