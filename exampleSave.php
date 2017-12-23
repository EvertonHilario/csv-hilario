<?php
//dados com o conteúdo do arquivo
$data = [
	['teste1', 'teste2', 'teste3'],
	['teste4', 'teste5', 'teste6']
];

//dados do topo da planilha, títulos das colunas
$header = ['a', 'b', 'c'];

require "./src/ExportCsv.php";
$csv = new ExportCsv;

$csv->setData($data);
$csv->setHeader($header);
$csv->setDelimiter(";");
$csv->setFileName("gremio-file");
$csv->setOutput("S", "directory/");
$csv->export();