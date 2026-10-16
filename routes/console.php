<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('nexgen:welcome', function () {
    $this->comment('Welcome to NexGen — build what comes next.');
})->purpose('Display the NexGen welcome message');
