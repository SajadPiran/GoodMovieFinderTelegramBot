<?php

class User
{
    private int $ID;
    public function __construct( readonly private Telegram $telegramBotProvider )
    {
        $this -> ID = $this -> telegramBotProvider -> ChatID();
    }
    public function getId(): int
    {
        return $this -> telegramBotProvider -> ChatID();
    }

    public function getText() : string
    {
        return $this -> telegramBotProvider -> getData()['message']['text'];

    }

    public function sendMessage( string $responseText ) : void
    {

        $content = [ 'chat_id' => $this -> ID , 'text' => $responseText ];
        $this -> telegramBotProvider -> sendMessage( $content );

    }

}