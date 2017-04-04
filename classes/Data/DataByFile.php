<?php

namespace Classes\Data;
use Classes\Data\DataHtml;

class DataByFile extends DataHtml
{

    public function __construct( $path )
    {

        if( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/' . $path ) ){
            $this->_html = file_get_contents( $_SERVER['DOCUMENT_ROOT'] . '/data.txt' );
        }
        
    }
   
    
}