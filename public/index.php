<?php

    require __DIR__.'/../autoload.php';
    echo "<pre>";

    $html = Classes\Data\Data::getHtmlByFile( 'data.txt' )
                              ->parseHtmlTags()
                              ->get()
                              ;

    var_dump( $html );


    $html = Classes\Data\Data::getHtmlByUrl( 'http://google.ru' )
                              ->parseHrefs()
                              ->getAsHtml()
                              ;

    var_dump( $html );

    /*
    Методы парсинга:
        parseHtmlTags() - ищет все теги и их количество
        parseHrefs() - ищет все ссылки
        parsePictures() - ищет все картинки

    Методы отображения результата:
        get() - вывод массива
        getAsHtml() - вывод html
        getAsXml() - вывод xml


    Classes\Data\Data::getHtmlByUrl( 'http://yandex.ru' )
                        ->parsePictures()
                        ->getAsXml()


    */

?>