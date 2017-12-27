<?php
use CsvHilario\ExportCsv\ExportCsv;

//dados com o conteúdo do arquivo
$data = [
	['teste1', 'teste2', 'teste3'],
	['teste4', 'teste5', 'teste6']
];

require "../src/ExportCsv.php";
$csv = new ExportCsv;

$csv->setData($data);
$csv->export();