<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected string $token;
    protected string $chatId;

    public function __construct()
    {
        $this->token = config('telegram.token');
        $this->chatId = config('telegram.chat_id');
    }

    public function sendMessage(string $text): bool
    {
        $url = "https://api.telegram.org/bot{$this->token}/sendMessage";

        $response = Http::post($url, [
            'chat_id' => $this->chatId,
            'text' => $text,
            'parse_mode' => 'HTML',
        ]);

        return $response->ok();
    }
}
