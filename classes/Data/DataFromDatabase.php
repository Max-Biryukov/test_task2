<?php

namespace Classes\Data;

class DataFromDatabase extends DataHtml
{

    public function __construct()
    {
        //Подключение к БД, получение данных, обработка.....
        //Для примера готовые данные находятся в файле data.txt
        $this->_html = "<div>12</div><div>13</div>";
        //$this->_html = file_get_contents( $_SERVER['DOCUMENT_ROOT'] . '/data.txt' );
    }

}