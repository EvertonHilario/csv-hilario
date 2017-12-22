# csv-hilario
<h3>Sobre</h3>
Classe escrita em PHP que fornece a possibilidade de escrever arquivos de planilha CSV de uma forma muito fácil, basta passar os dados! 
Por padrão basta passar os dados por array para poder fazer o download do arquivo. O array deve ser bidimensional como o exemplo abaixo:
<br><br>
$cars = array(<br>
    array("Volvo",22,18),<br>
    array("BMW",15,13),<br>
    array("Saab",5,2),<br>
    array("Land Rover",17,15)<br>
);<br>

<h3>Característica da classe</h3>

De fácil implementação
Curva baixa de aprendizado
Código enxuto
Defina as propriedades de escrita como nome do arquivo, header, output e delimitador dos dados.
Requisitos
Versão PHP 5.2.0 ou superior

<h3>Baixar do repositório</h3>

$ git clone https://github.com/EvertonHilario/csv-hilario.git<br>
Exemplo Básico para realizar download de um CSV<br>
<?php<br>
require "ExportCsv.php";<br>
$mail = new ExportCsv;<br>
<br><br>
$data = array(<br>
    array("Volvo","green",17),<br>
    array("BMW","yelow",13),<br>
    array("Saab","blue",07),<br>
    array("Land Rover","red",15)<br>
);<br><br>

$header = array("nome", "cor", "ano");<br>
$filename = "test-file";<br>
$csv->exportCsv($data, $header, $filename);
