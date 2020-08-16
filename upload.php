<?php

$file_data=($_FILES['file']['tmp_name']);

if($_FILES['file']['type']!=='text/csv' || $_FILES['file']['size'] > 100000){

    echo"Input smaller file only txt or csv type";
}
else {

    $file_data = ($_FILES['file']['tmp_name'])
$delimiter = ',';
$csv = file_get_contents($file_data);

$rows = explode(PHP_EOL, $csv);
$data = [];

foreach (rows as $row) {

    $data[] = explode($delimiter, $row);

}

$json = json_encode($data);
file_put_contents('1.json', $json);

$json2 = file_get_contents('1.json', true);
$data2 = json_decode($json2);

foreach ($data2 as $line) {

    drawTable($line);

}

}








?>
