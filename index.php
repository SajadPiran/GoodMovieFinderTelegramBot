<?php
include __DIR__ . '/vendor/autoload.php';
include __DIR__ . '/User.php';
const BOT_TOKEN = '7541225132:AAETNKxAPvq9JmDr-CTFL-uHJ5dsYlRnP9Q';

$telegram = new Telegram(BOT_TOKEN );
$user = new User( $telegram );

if( $user -> getText() === '/start' ) {

    $user -> sendMessage( 'اسم فیلم یا سریال مورد نظر را ارسال کنید' );

}else {

    $user -> sendMessage( ' به ربات فیلم یابی خوش آمدید٬ اسم فیلم و سریال مورد نظر را بفرستید تا اطلاعات ' );

}
