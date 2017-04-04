<?php

namespace Classes\Data;

use Classes\Parser\ParserHtmlTags;
use Classes\Parser\ParserPictures;
use Classes\Parser\ParserHrefs;

class DataHtml 
{

    protected $_html;

    public function __call( $method, $params )
    {               
        echo "<p style='font-weight: bold; color: #900'>Данный метод парсинга недоступен '" . $method . "'. Выполнен дефолтный поиск по тегам.</p>";
        return $this->parseHtmlTags(); 
    }
    
    public function getHtml()
    {
        return $this->_html;
    }
    
    /**
    * Парсинг по тегам
    * 
    */
    
    public function parseHtmlTags()
    {
        return new ParserHtmlTags( $this );
    }  

    /**
    * Парсинг картинок
    * 
    */
    public function parsePictures()
    {
        return new ParserPictures( $this );
    }
    
    /**
    * Парсинг ссылок
    * 
    */
    
    public function parseHrefs()
    {
        return new ParserHrefs( $this );
    }    
    
}