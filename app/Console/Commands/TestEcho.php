<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestEcho extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'echo:echo-echo {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The description of my TestEcho!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'This is the custom command! ' . $this->argument('number') . PHP_EOL;
    }
}
