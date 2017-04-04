<?php

namespace Classes\Result;


class ResultXml
{
    public static function getResult( array $results )
    {
        $xml = new \SimpleXMLElement( '<?xml version="1.0" encoding="utf-8" ?><root></root> ');
                
        foreach( $results as $key => $value ) {
            $xml->addChild( $key, $value );  
        }        
          
        return $xml->asXML(); 
        
    }    

}
