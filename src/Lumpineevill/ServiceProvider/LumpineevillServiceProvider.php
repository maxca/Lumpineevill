<?php

namespace Lumpineevill\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Lumpineevill\Command\ExampleCommand;

class LumpineevillServiceProvider extends ServiceProvider
{
    /**
     * set command list
     * @var array
     */
    protected $commands = [
        ExampleCommand::class,
    ];

    /**
     * register servicde
     * @return [type] [description]
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../Config/Form.php' => config_path('Form.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__ . '/../Config/Form.php', 'formsimple'
        );
    }

    /**
     * booting application
     * @return [type] [description]
     */
    public function boot()
    {
        require __DIR__ . '/../Http/Routing.php';

        # add commnads
        $this->commands($this->commands);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['lumpineevill.sukumvit76'];
    }

}
