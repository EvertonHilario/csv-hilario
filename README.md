# csv-hilario
Essa classe visa simplificar exportação de dados em arquivos CSVs da forma mais genérica possível


Sobre
Classe escrita em PHP que fornece a possibilidade de escrever arquivos de planilha CSV de uma forma muito fácil, basta passar os dados! 
Por padrão basta passar os dados por array para poder fazer o download do arquivo. O array deve ser bidimensional como o exemplo abaixo:

$cars = array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

Característica da classe

De fácil implementação
Curva baixa de aprendizado
Código enxuto
Defina as propriedades de escrita como nome do arquivo, header, output e delimitador dos dados.
Requisitos
Versão PHP 5.2.0 ou superior

Simples exemplo
Baixar do repositório
$ git clone https://github.com/EvertonHilario/csv-hilario.git
Exemplo Básico para realizar download de um CSV
<?php
require ‘ExportCsv.php';
$mail = new ExportCsv;

$data = array(
    array("Volvo","green",17),
    array("BMW","yelow",13),
    array("Saab","blue",07),
    array("Land Rover","red",15)
);

$header = array("nome", "cor", "ano");
$filename = "test-file”;
$csv->exportCsv($data, $header, $filename);
