<?php

namespace Classes\Parser;

class ParserHtmlTags extends ParserHtml
{

    protected function parse()
    {
        
        preg_match_all( '#<(?<tags>[a-z]+) .*>#Us', $this->_data_html_object->getHtml(), $matches );
        
        if( !empty($matches['tags']) ){
            $this->_result = array_count_values( $matches['tags'] );
            return true;
        }
                
        return false;
    }

}