<?php

namespace Lumpineevill\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example:command-test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For check expired aution winner not paid or not add product to cart';

    /**
     * winner list
     * @var collection
     */
    protected $winners;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        Log::info('Cronjob Check aution winner expired time');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dump('ok');
    }
}
