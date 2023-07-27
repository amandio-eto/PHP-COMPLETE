<?php



$getjson = file_get_contents('data.json');

#Convert for Json to Array Assosiavite in PHP;

echo json_decode($getjson, true);

