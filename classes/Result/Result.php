<?php

namespace Classes\Result;
use Classes\Result\ResultHtml;

class Result
{

    private $_result = [];

    public function __construct( array $result )
    {        
        $this->_result = $result;
    }
    
    /**
    * Дефолтный вывод массива
    * 
    */
    
    public function get()
    {        
        return $this->_result; 
    }

    /**
    * Отобразить результат, как html
    * 
    */
    
    public function getAsHtml()
    {        
        if( !empty($this->_result) ){
            return ResultHtml::getResult( $this->_result );
        }
        
        return '';
    }

    /**
    * Отобразить результат, как Xml
    * 
    */
    public function getAsXml()
    {        
        if( !empty($this->_result) ){
            return ResultXml::getResult( $this->_result );
        }
        
        return '';
    }    
    
    
}