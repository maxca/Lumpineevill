<?php
/**
 * @author samark chaisanguan
 * @email samarkchsngn@gmail.com
 */
namespace Lumpineevill\Generate;

use Illuminate\Support\Facades\Artisan;

class GenerateAPI extends GenerateFile
{
    /**
     * set config path
     * @var array
     */
    protected $configPath = [

        'Controller' => [
            'resource' => 'TemplateAPI/Controller.php',
            'target' => 'app/Http/Controllers/',
        ],
        'Request' => [
            'resource' => 'TemplateAPI/Request.php',
            'target' => 'app/Http/Requests/',
        ],
        'Model' => [
            'resource' => 'TemplateAPI/Model.php',
            'target' => 'app/Models/',
        ],
        'Repository' => [
            'resource' => 'TemplateAPI/Repository.php',
            'target' => 'app/Repository/',
        ],
        'Interface' => [
            'resource' => 'TemplateAPI/Interface.php',
            'target' => 'app/Repository/',
        ],
        'Route' => [
            'resource' => 'TemplateAPI/Route.php',
            'target' => 'app/Http/Routes/API/',
        ],

    ];

    /**
     * set need duplicate create file
     * @var array
     */
    protected $needDuplicate = [
        'Request' => 'requestType',
        'Config' => 'configType',
    ];

    /**
     * set request type
     * @var array
     */
    protected $requestType = [
        'create' => true,
        'update' => true,
        'delete' => true,
        'detail' => false,
        'get' => true,
    ];

    /**
     * [__construct description]
     * @param string $namespace [description]
     */
    public function __construct($namespace = '')
    {
        parent::__construct($namespace);
    }

    /**
     * [makeMigration description]
     * @return [type] [description]
     */
    public function makeMigration()
    {
        $tableName = $this->replaceSmall;
        $call = 'create_table_' . $tableName;
        $exitCode = Artisan::call('make:migration', [
            'name' => $call,
            '--create' => $tableName,
        ]);
        parent::printline('ok');
    }
}
