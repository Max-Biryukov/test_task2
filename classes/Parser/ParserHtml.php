<?php

namespace Classes\Parser;

use Classes\Data\DataHtml;
use Classes\Result\Result;

abstract class ParserHtml
{
    protected $_data_html_object;
    protected $_result = [];
    
    public function __construct( DataHtml $data_html )
    {
        $this->_data_html_object = $data_html;
        $this->parse();
    }
    

    public function __call( $method, $params )
    {
        if( method_exists( Result::class, $method ) ){
            $result = new Result( $this->_result );
            return $result->$method();
        }
                
        echo "<p style='font-weight: bold; color: #900'>Данный метод обработки результата недоступен '" . $method . "'</p>"; 
    }
    
    abstract protected function parse();
}