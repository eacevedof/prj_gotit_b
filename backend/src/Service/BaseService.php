<?php
namespace App\Service;
use Psr\Container\ContainerInterface;

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

    public function getErrors(){return $this->errors;}
    public function getMessages(){return $this->messages;}
    public function isError(){return $this->is_error;}
    public function getOutput($key=""){return ($key ? $this->aroutput[$key]??null: $this->aroutput);}
    
}//BaseService