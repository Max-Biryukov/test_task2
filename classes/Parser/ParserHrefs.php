<?php

namespace Classes\Parser;

class ParserHrefs extends ParserHtml
{

    protected function parse()
    {
        
        preg_match_all( '#<a.*href="(?<href>.*)".*>#Us', $this->_data_html_object->getHtml(), $matches );
       
        if( !empty($matches['href']) ){
            $this->_result = $matches['href'];
            return true;
        }
                
        return false;
    }

}