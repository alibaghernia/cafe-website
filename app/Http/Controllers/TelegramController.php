<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Telegram\Bot\Api;
// use BotMan\BotMan\BotMan;
// use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;

class TelegramController extends Controller
{
    public function index()
    {
        $config = [
            // Your driver-specific configuration
            "telegram" => [
                "token" => "555296266:AAE6VqUBaMETouDGmS67d05pOdc4taYF8Zg"
            ]
        ];
        // Load the driver(s) you want to use
        // DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

        // Create an instance
        $botman = BotManFactory::create($config);

        // Give the bot something to listen for.
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello yourself.');
        });

        // Start listening
        $botman->listen();
    }
    public function index0()
    {
        // $response = Telegram::getMe();
        // $telegram = new Api('BOT TOKEN');
        // dd();
        // \Telegraph\
        // $telegram = new Api('555296266:AAE6VqUBaMETouDGmS67d05pOdc4taYF8Zg');
        // dd($telegram->getMe());
        // $r=Http::get('https://api.ipify.org/?format=json');
        // dd($r->json());
    }
}
