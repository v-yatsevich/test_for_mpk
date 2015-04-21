<?php

include 'ParserAbstract.php';
include 'FilesLoader.php';

class JSONParser {
    
    public function parseFromString($xmlString) {
        $result = json_decode($xmlString, true);
        if ($result === null) {
            trigger_error("Ошибка, неверно сформирован полученный файл\nJSON имеет синтаксические ошибки");
        }
        return $result;
    }
    
}