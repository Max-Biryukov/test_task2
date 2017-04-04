<?php

namespace Classes\Data;

class DataByUrl extends DataHtml
{

    public function __construct( $url )
    {

        if( filter_var($url, FILTER_VALIDATE_URL) !== false ){                      
            $html = file_get_contents( $url );
        } else {
            echo "<p style='font-weight: bold; color: #900'>'" . $url . "' является неверным адресом";
        }
        
        if( empty($html) ){
            echo "<p style='font-weight: bold; color: #900'>Не удалось получить контент по урлу '" . $url . "'</p>";
        } else {
            $this->_html = $html;
        }                        
    }

}