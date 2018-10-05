# csv-hilario

Classe escrita em PHP que fornece a possibilidade de escrever arquivos de planilha CSV de uma forma muito simples e rápida.
Basta passar os dados por um array bidimensional para poder fazer o download do arquivo.

### Característica da classe
- De fácil implementação
- Curva baixa de aprendizado
- Código enxuto
- Defina as propriedades de escrita como nome do arquivo, header, output e delimitador dos dados.
- Classe orientada a objeto

### Requisitos
Versão PHP 5.4.0 ou superior

### Instalação e Carregamento
O **csv-hilario** está disponível no [Packagist](https://packagist.org/packages/everton-hilario/csv-hilario) e a instalação via [composer](https://getcomposer.org/) é a maneira recomendada de instalar. Basta adicionar esta linha ao seu **composer.json**
```sh
"everton-hilario/csv-hilario": "1.*"
```
ou executar
```sh
$ composer require everton-hilario/csv-hilario
```

### Exemplo básico
```php
use CsvHilario\ExportCsv\ExportCsv;
//dados com o conteúdo do arquivo
$data = [
	["a" => "teste1", "b" => "teste2", "c" => "teste3"],
	["a" => "teste4", "b" => "teste5", "c" => "teste6"]
];
$csv = new ExportCsv;
$csv->setData($data);
$csv->export();
```

### Exemplo para realizar download de um CSV passando alguns parâmetros
```php
use CsvHilario\ExportCsv\ExportCsv;
//dados com o conteúdo do arquivo
$data = [
	["teste1", "teste2", "teste3"],
	["teste4", "teste5", "teste6"]
];
//dados do topo da planilha, títulos das colunas
$header = ["a", "b", "c"];
$csv = new ExportCsv;
$csv->setData($data);
$csv->setHeader($header);
$csv->setDelimiter(";");
$csv->setFileName("gremio-file");
$csv->setOutput("D");
$csv->export();
```

### Exemplo Básico para salvar arquivo CSV em diretório específico
```php
use CsvHilario\ExportCsv\ExportCsv;
//dados com o conteúdo do arquivo
$data = [
	["teste1", "teste2", "teste3"],
	["teste4", "teste5", "teste6"]
];
//dados do topo da planilha, títulos das colunas
$header = ["a", "b", "c"];
$csv = new ExportCsv;
$csv->setData($data);
$csv->setHeader($header);
$csv->setDelimiter(";");
$csv->setFileName("gremio-file");
$csv->setOutput("S", "directory/");
$csv->export();
```