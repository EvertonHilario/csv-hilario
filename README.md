# csv-hilario
<h3>Sobre</h3>

<p>Classe escrita em PHP que fornece a possibilidade de escrever arquivos de planilha CSV de uma forma muito simples e rápida.
Basta passar os dados por um array bidimensional para poder fazer o download do arquivo.</p>

<h3>Característica da classe</h3>
<ul>
	<li>De fácil implementação</li>
	<li>Curva baixa de aprendizado</li>
	<li>Código enxuto</li>
	<li>Defina as propriedades de escrita como nome do arquivo, header, output e delimitador dos dados.</li>
	<li>Classe orientada a objeto</li>
</ul>

<h3>Requisitos</h3>
<p>Versão PHP 5.4.0 ou superior</p>

<h3>Instalação e Carregamento</h3>
<p>
O csv-hilario está disponível no Packagist e a instalação via compositor é a maneira recomendada de instalar. Basta adicionar esta linha ao seu composer.json:
</p>
<pre>"everton-hilario/csv-hilario": "1.*"</pre>
<p>ou executar</p>
<pre>$ composer require everton-hilario/csv-hilario</pre>

<h3>Exemplo básico</h3>
<pre>
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
</pre>

<h3>Exemplo para realizar download de um CSV passando alguns parâmetros</h3>
<pre>
$data = [
	['teste1', 'teste2', 'teste3'],
	['teste4', 'teste5', 'teste6']
];
$header = ['a', 'b', 'c'];
require "./src/ExportCsv.php";
$csv = new ExportCsv;
$csv->setData($data);
$csv->setHeader($header);
$csv->setDelimiter(";");
$csv->setFileName("gremio-file");
$csv->setOutput("D");
$csv->export();
</pre>

<h3>Exemplo Básico para salvar arquivo CSV em diretório específico</h3>
<pre>
use CsvHilario\ExportCsv\ExportCsv;
//dados com o conteúdo do arquivo
$data = [
	['teste1', 'teste2', 'teste3'],
	['teste4', 'teste5', 'teste6']
];
//dados do topo da planilha, títulos das colunas
$header = ['a', 'b', 'c'];
require "../src/ExportCsv.php";
$csv = new ExportCsv;
$csv->setData($data);
$csv->setHeader($header);
$csv->setDelimiter(";");
$csv->setFileName("gremio-file");
$csv->setOutput("S", "directory/");
$csv->export();
</pre>