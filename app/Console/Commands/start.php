<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class start extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Roda: "migrate:reset", "migrate" e "db:seed"';

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
     * @return mixed
     */
    public function handle()
    {
        $source = $this->choice(
            'Which source would you like to use?',
            ['Cancel', 'All', 'Drop tables', 'Create tables', 'Run seeds']
        );

        switch ($source) {
            case 'Cancel':
                break;
            case 'All':
            case 'Drop tables':
                Artisan::call('migrate:reset');
                $this->info('Drop tables... OK');
            case 'All':
            case 'Create tables':
                Artisan::call('migrate');
                $this->info('Create tables... OK');
            case 'All':
            case 'Run seeds':
                Artisan::call('db:seed');
                $this->info('Run seeds... OK');
        }
    }
}
