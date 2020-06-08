<?php

namespace Statamic\Addons\StacheWax\Commands;

use Statamic\API\Stache;
use Statamic\Extend\Command;

class StachePrimeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stache:wax';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepare for another hot day in Miami';

    /**
     * Create a new command instance.
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
        Stache::update();

        $this->info('Your Stache is ready, Magnum!');
    }
}
