<?php

namespace Classes\Data;

use Classes\Data\DataByUrl;
use Classes\Data\DataFromDatabase;
use Classes\Data\DataByFile;

class Data
{

    public static function getHtmlByUrl( $url )
    {
        return new DataByUrl( $url );
    }

    public static function getHtmlFromDatabase()
    {
        return new DataFromDatabase();
    }

    public static function getHtmlByFile( $path )
    {
        return new DataByFile( $path );
    }

}