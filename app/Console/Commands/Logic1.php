<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Logic1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logic1:call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Jawaban Logic 1';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $input['result'] = $this->ask('Masukkan Inputan ');
        $result = strrev($input['result']);
        $this->info($result);
    }
}
