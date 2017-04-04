<?php

namespace Classes\Parser;

class ParserPictures extends ParserHtml
{

    protected function parse()
    {
        
        preg_match_all( '#<img.*src="(?<pictures>.*)".*>#Us', $this->_data_html_object->getHtml(), $matches );
               
        if( !empty($matches['pictures']) ){
            $this->_result = $matches['pictures'];
            return true;
        }
                
        return false;
    }

}