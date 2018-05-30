<?php
namespace Lumpineevill\Generate;

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
        'Interfaces' => [
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
        'detail' => true,
        'getUpdate' => true,
    ];

    /**
     * [__construct description]
     * @param string $namespace [description]
     */
    public function __construct($namespace = '')
    {
        parent::__construct($namespace);
    }
}
