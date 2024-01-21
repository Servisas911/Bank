<?php

use Bank\App\App;
use Bank\App\Message;
use Bank\App\Auth;
session_start();

 
require '../vendor/autoload.php';

define('ROOT', __DIR__ . '/../'); //rodo kur faila sudeti
define('URL', 'bank/public/'); //rodo, koks adresiukas

Message::get();
Auth::get();


echo App::run();