<?php

namespace Classes\Result;


class ResultHtml
{
    public static function getResult( array $results )
    {
        $html = '<div><div>Результаты:</div>';
        foreach( $results as $key => $value ){
            $html .= '<p>' . $key . ' = ' . $value . ';</p>' ;
        }        
        $html .= '</div>';
        
        return $html;
        
    }    

}