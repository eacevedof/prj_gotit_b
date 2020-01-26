<?php
namespace App\Service;
//use Psr\Container\ContainerInterface;

//use Monolog\Logger;
//use Monolog\Handler\BrowserConsoleHandler;

abstract class BaseService 
{
    protected $errors = [];
    protected $messages = [];
    protected $is_error = false;
    protected $arinput = [];
    protected $aroutput = [];
    
    public function __construct($arinput=[]) 
    {
        $this->arinput = $arinput;
    }
    
    protected function log($content,$title="")
    {
        $log = new \Symfony\Component\HttpKernel\Log\Logger();
        $log->info($title);
        $log->info($content);
    }

    public function getErrors(){return $this->errors;}
    public function getMessages(){return $this->messages;}
    public function isError(){return $this->is_error;}
    public function getOutput($key=""){return ($key ? $this->aroutput[$key]??null: $this->aroutput);}
    public function isInserted(){return $this->aroutput["inserted"] ?? false;}
    
    
}//BaseService